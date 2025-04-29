<?php

namespace App\Http\Controllers\Panel\Marketplace;

use App\Http\Controllers\Controller;
use App\Models\MarketplaceAccount;
use App\Models\MarketplaceProduct;
Use App\Services\Marketplace\TrendyolService;
use Illuminate\Http\Request;

class TrendyolProductSyncController extends Controller
{
    public function sync(Request $request)
    {
        // Aktif Trendyol hesabını alıyoruz
        $account = MarketplaceAccount::where('marketplace_id', 1)->where('is_active', 1)->first();

        if (!$account) {
            return redirect()->back()->with('error', 'Aktif Trendyol hesabı bulunamadı.');
        }

        $trendyol = new TrendyolService(
            $account->api_key,
            $account->api_secret,
            json_decode($account->settings, true)['supplier_id']
        );

        $page = 0;
        $size = 100;
        $totalImported = 0;

        do {
            $products = $trendyol->getProducts($page, $size);

            foreach ($products['content'] ?? [] as $product) {
                MarketplaceProduct::updateOrCreate(
                    [
                        'marketplace_id' => 1,
                        'marketplace_product_id' => $product['id'],
                    ],
                    [
                        'name' => $product['title'] ?? '',
                        'sku' => $product['sku'] ?? null,
                        'barcode' => $product['barcode'] ?? null,
                        'stock' => $product['quantity'] ?? null,
                        'price' => $product['listPrice'] ?? null,
                        'attributes' => $product['attributes'] ?? [],
                        'raw' => $product,
                    ]
                );
                $totalImported++;
            }

            $page++;
        } while (($products['totalPages'] ?? 0) > $page);

        return redirect()->back()->with('success', "{$totalImported} adet Trendyol ürünü güncellendi.");
    }
}
