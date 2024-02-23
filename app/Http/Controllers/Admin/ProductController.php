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
use Closure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    use ManagesImages;

    const FILTER_OPTIONS = [
        'merchant' => 'Pazaryerinde olan',
        'non-merchant' => 'Pazaryerinde olmayan',
        'merchant-mark' => 'Pazaryerlerine açık olan',
        'non-merchant-mark' => 'Pazaryerlerine kapalı olan',
        'bot' => 'Bot ile çekilen',
        'non-bot' => 'Bot ile çekilmeyen',
    ];
    const FIELDS_TO_SEARCH = [
        'sku',
        'part_number',
        'producercode',
        'cross_code',
        'oem_codes',
        'producercode2',
        'abk',
        'similar_product_codes',
    ];

    private static function getFilterConstraints()
    {
        return [
            'merchant' => fn(Builder $query) => $query->whereHas("merchants"),
            'non-merchant' => fn(Builder $query) => $query->where("ecommerce", true)->has("merchants", "=", 0),
            'merchant-mark' => fn(Builder $query) => $query->where("ecommerce", true),
            'non-merchant-mark' => fn(Builder $query) => $query->where("ecommerce", false),
            'bot' => fn(Builder $query) => $query->whereHas("bots"),
            'non-bot' => fn(Builder $query) => $query->whereDoesntHave("bots"),
        ];
    }

    private static function filterQuery(Builder $query, ?array $filterOptions, ?array $brands, ?string $search)
    {
        if ($filterOptions) {
            foreach ($filterOptions as $filterOption) {
                $filterConstraints = self::getFilterConstraints();
                abort_unless(array_key_exists($filterOption, $filterConstraints), 400, "Geçersiz filtre");
                $queryFn = $filterConstraints[$filterOption];
                $queryFn($query);
            }
        }

        if ($search) {
            $query->where(function (Builder $query) use ($search) {
                foreach (self::FIELDS_TO_SEARCH as $field) {
                    $query->orWhere($field, 'like', "%$search%");
                }
            });
        }

        if ($brands) {
            $query = $query->whereIn("brand_id", $brands);
        }

        return $query;
    }

    public static function tableResponse(?Builder $productQuery = null)
    {
        $request = \request();
        $query = self::filterQuery(
            $productQuery ?? Product::query(),
            Arr::wrap($request->input('filters')),
            Arr::wrap($request->input('brands')),
            $request->input('search')
        );

        $hasAnyBrandsChosen =
            $request->input('brands') != "all" &&
            $request->input('brands') != 0 &&
            filled($request->input('brands'));

        $hasAnyFiltersApplied =
            $hasAnyBrandsChosen ||
            filled($request->input('filters')) ||
            filled($request->input('search'));

        if ($hasAnyFiltersApplied)
            $brands = Brand::whereIn("id", $query->clone()->select("brand_id"))->get(["id", "name"]);

        $products = $query->clone()->with(["merchants", "price"])->paginate();
        $products->appends($request->except('page'));

        $filterConstraintsToShow = collect(self::getFilterConstraints())
            ->filter(fn(Closure $qFn) => $qFn($query->clone())->exists())
            ->mapWithKeys(fn($_, $key) => [$key => self::FILTER_OPTIONS[$key]])
            ->all();


        $brands ??= Brand::get(["id", "name"]);
        $chosenBrands = $hasAnyBrandsChosen ? Arr::wrap($request->input('brands')) : false;
        $chosenFilters = \Arr::wrap(request()->input("filters"));
        return view('admin.inhouse.products.table', compact('products', 'brands', 'filterConstraintsToShow', 'chosenBrands', 'chosenFilters'));
    }

    public function index()
    {
        return self::tableResponse();
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
