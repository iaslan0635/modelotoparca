<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController as CustomerProductController;
use App\Jobs\SparetoConnectJob;
use App\Models\Product;
use App\Models\SparetoConnection;
use App\Packages\Search;
use Elastic\ScoutDriverPlus\Paginator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($search = $request->input("search")) {
            /** @var Paginator $hits */
            ['products' => $hits] = Search::query($search);
            $products = $hits->onlyModels();
        } else
            $products = Product::paginate();
        return view("admin.apps.ecommerce.catalog.products", compact("products"));
    }

    public function show(Product $product)
    {
        return view("admin.apps.ecommerce.catalog.edit-product", CustomerProductController::getViewData($product));
    }

    public function push_spareto(int $productId, Request $request)
    {
        $url = $request->input("url");
        $connection = SparetoConnection::create([
            "url" => $url,
            "product_id" => $productId,
            "connected_by" => "manual",
            "keyword_field" => "manual",
            "keyword" => "manual"
        ]);

        dispatch(function () use ($connection) {
            SparetoConnectJob::connect($connection);
        })->onQueue("immediate");
        return back();
    }

    public function push_oem(Product $product, Request $request)
    {
        $oem = $request->input("oem");
        $brand = $request->input("brand");
        $product->oems()->firstOrCreate([
            "oem" => $oem,
            "brand" => $brand,
        ]);
        return back();
    }

    public function push_image(Product $product, Request $request)
    {
        $file = $request->file("file")->storePublicly("images");
        abort_unless($file, 400, "Unable to read file");
        $product->image()->create(["path" => $file]);
        return "success";
    }
}
