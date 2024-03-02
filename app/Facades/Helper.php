<?php

namespace App\Facades;

use App\Enums\HepsiburadaProductStatus;
use App\Enums\N11ProductStatus;

class Helper
{
    public static function getN11EnumStatuses($status)
    {
        $values = N11ProductStatus::cases();
        $data = [];

        foreach ($values as $value) {
            [$id, $text, $turkish] = explode('|', $value->value);
            $data[] = (object) [
                'id' => (int) $id,
                'text' => $text,
                'turkish' => $turkish,
            ];
        }

        return collect($data)->filter(fn ($item) => $item->id === $status)->first();
    }

    public static function getHepsiburadaStatuses($status)
    {
        $values = HepsiburadaProductStatus::cases();
        $data = [];

        foreach ($values as $value) {
            [$text, $turkish] = explode('|', $value->value);
            $data[] = (object) [
                'text' => $text,
                'turkish' => $turkish,
            ];
        }

        return collect($data)->filter(fn ($item) => $item->text === $status)->first();
    }
}
