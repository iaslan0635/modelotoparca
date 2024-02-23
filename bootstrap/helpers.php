<?php

use Illuminate\Support\Facades\DB;

function merchant_setting(string $merchant, string $key, mixed $default = null)
{
    return DB::table("merchants")
        ->where("name", $merchant)
        ->where("key", $key)
        ->value("value") ?? $default;
}

function get_item($target, $key, $default = null)
{
    if (Arr::accessible($target) && Arr::exists($target, $key)) {
        return $target[$key];
    } elseif (is_object($target) && isset($target->{$key})) {
        return $target->{$key};
    } else {
        return value($default);
    }
}
