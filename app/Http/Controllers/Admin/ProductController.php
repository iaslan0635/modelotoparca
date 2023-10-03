<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController as CustomerProductController;
use App\Jobs\RunSingleBotJob;
use App\Models\Car;
use App\Models\Log;
use App\Models\Product;
use App\Models\TigerProduct;
use App\Packages\Search;
use Elastic\ScoutDriverPlus\Paginator;
use Elastic\ScoutDriverPlus\Support\Query;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ManagesImages;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($search = $request->input('search')) {
            /** @var Paginator $hits */
            ['products' => $hits] = Search::query($search);
            $products = $hits->onlyModels();
        } else {
            $products = Product::paginate();
        }

        return view('admin.apps.ecommerce.catalog.products', compact('products'));
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
            'results' => $cars->map(fn (Car $car) => [
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
