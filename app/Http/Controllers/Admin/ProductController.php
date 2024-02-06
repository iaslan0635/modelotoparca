<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController as CustomerProductController;
use App\Jobs\RunSingleBotJob;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Log;
use App\Models\Product;
use App\Models\TigerProduct;
use App\Packages\Search;
use Elastic\ScoutDriverPlus\Paginator;
use Elastic\ScoutDriverPlus\Support\Query;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ProductController extends Controller
{
    use ManagesImages;

    const OPTIONS = [
        'merchant' => 'Pazaryerinde olan',
        'non-merchant' => 'Pazaryerinde olmayan',
        'bot' => 'Bot ile çekilen',
        'non-bot' => 'Bot ile çekilmeyen',
        'non-image' => 'Resmi olmayan',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($search = $request->input('search')) {
            /** @var Paginator $hits */
            ['products' => $hits] = Search::query($search);
            $products = $hits->onlyModels();
            $usingSearch = true;
            $filterConstraintsToShow = array_keys(self::OPTIONS);
        } else {
            $filterConstraints = [
                'merchant' => Product::has("merchants"),
                'non-merchant' => Product::where("ecommerce", true)->has("merchants", "=", 0),
                'bot' => Product::has("bots"),
                'non-bot' => Product::doesntHave("bots"),
                'non-image' => Product::doesntHave("images"),
            ];

            $filterName = $request->input("filter");
            /** @var Builder $query */
            $query = $filterConstraints[$filterName] ?? Product::query();

            $brand = $request->input("brand");
            if ($brand !== null && $brand !== 'all') {
                $query = $query->where("brand_id", $brand);
            }

            $brands = Brand::whereIn("id", $query->clone()->select("brand_id"))->get(["id", "name"]);
            $products = $query->clone()->with(["merchants", "price"])->paginate();
            $products->appends($request->except('page'));
            $usingSearch = false;

            $filterConstraintsToShow = collect($filterConstraints)
                ->filter(fn($q) => $query->clone()->whereExists($q)->exists())
                ->mapWithKeys(fn($_, $key) => [$key => self::OPTIONS[$key]])->all();
        }

        $brands ??= Brand::get(["id", "name"]);
        return view('admin.apps.ecommerce.catalog.products', compact('products', 'brands', 'usingSearch', 'filterConstraintsToShow'));
    }

    public function show(Product $product)
    {
        return view('admin.apps.ecommerce.catalog.edit-product',
            [...CustomerProductController::getViewData($product), 'logs' => Log::where('product_id', $product->id)->orderByDesc('created_at')->get()]
        );
    }

    public function push_oem(Product $product, Request $request)
    {
        $oem = $request->input('oem');
        $brand = $request->input('brand');
        $product->oems()->firstOrCreate([
            'oem' => $oem,
            'brand' => $brand,
            'type' => 'manual',
        ]);

        return back();
    }

    public function push_image(Product $product, Request $request)
    {
        return $this->storeImage($product, $request);
    }

    public function searchForSelect2(Request $request)
    {
        $query = $request->input('q');
        $cars = $query ? Car::searchQuery(Query::match()->field('name')->query($query))->paginate(10)->onlyModels() : Car::paginate(10);

        return [
            'results' => $cars->map(fn(Car $car) => [
                'id' => $car->id,
                'text' => $car->name,
            ])->all(),
            'pagination' => [
                'more' => $cars->hasMorePages() && $cars->count() > 0,
            ],
        ];
    }

    public function rerunBot(Product $product)
    {
        dispatch(new RunSingleBotJob(TigerProduct::findOrFail($product->id)));

        return back();
    }
}
