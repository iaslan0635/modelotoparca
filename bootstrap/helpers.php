<?php

use Illuminate\Support\Facades\DB;

function merchant_setting(string $merchant, string $key, mixed $default = null)
{
    return DB::table("merchants")
        ->where("name", $merchant)
        ->where("key", $key)
        ->value("value") ?? $default;
}
