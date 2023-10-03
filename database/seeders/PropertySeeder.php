<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run(): void
    {
        $d = ['excel_file' => 'oil', 'show_filter' => 1];
        $categories = Category::whereIn('id', [
            79295,
            78132,
            82613,
            78133,
            82614,
            82611,
            82612,
            79300,
            79296,
            79301,
            79304,
            79299,
        ])->get();

        $properties = [
            [...$d, 'name' => 'KATEGORİ', 'excel_column' => 'A'],
            [...$d, 'name' => 'ARAÇ TİPİ', 'excel_column' => 'B'],
            [...$d, 'name' => 'CODE', 'excel_column' => 'C'],
            [...$d, 'name' => 'NAME', 'excel_column' => 'D'],
            [...$d, 'name' => 'Web Name', 'excel_column' => 'E'],
            [...$d, 'name' => 'VİSKOZİTE', 'excel_column' => 'F'],
            [...$d, 'name' => 'DPF', 'excel_column' => 'G'],
            [...$d, 'name' => 'ÜRETİCİ', 'excel_column' => 'I'],
            [...$d, 'name' => 'MARKA', 'excel_column' => 'J'],
            [...$d, 'name' => 'RENK', 'excel_column' => 'K'],
            [...$d, 'name' => 'HACİM', 'excel_column' => 'L', 'transformer' => 'only_float'],
            [...$d, 'name' => 'AĞIRLIK', 'excel_column' => 'M', 'transformer' => 'only_float'],
            [...$d, 'name' => 'AMBALAJ TİPİ', 'excel_column' => 'N'],
            [...$d, 'name' => 'KALİTE', 'excel_column' => 'O'],
            [...$d, 'name' => 'OEM ONAYLARI', 'excel_column' => 'P'],
            [...$d, 'name' => 'Spesifikasyonlar', 'excel_column' => 'Q'],
            [...$d, 'name' => 'OEM PERFORMANSLARI', 'excel_column' => 'R'],
            [...$d, 'name' => 'ÜRÜN ÖZELLİĞİ', 'excel_column' => 'S'],
        ];

        foreach ($properties as $property) {
            $prop = Property::create($property);
            $prop->category()->saveMany($categories);
        }
    }
}
