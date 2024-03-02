<?php

namespace App\Http\Controllers;

use App\Services\MarketPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class MerchantSettingController extends Controller
{
    public function index()
    {
        return view('admin.inhouse.merchant-setting.index');
    }

    public function store(Request $request)
    {
        $validationTemplate = [
            'comission' => 'between:0,100|required|integer',
        ];

        $validation = collect(MarketPlace::MERCHANTS)->flatMap(fn (string $merchant) => Arr::prependKeysWith($validationTemplate, "{$merchant}-"))->all();

        $allData = $request->validate($validation);

        foreach ($allData as $fullKey => $value) {
            [$merchant, $key] = explode('-', $fullKey);
            DB::table('merchants')->updateOrInsert(
                [
                    'name' => $merchant,
                    'key' => $key,
                ],
                ['value' => $value]
            );
        }

        return back();
    }
}
