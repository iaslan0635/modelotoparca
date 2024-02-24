<?php

return [
    [
        'name' => 'Ürünler',
        'children' => [
            ['name' => 'Arama'],
            ['name' => 'Filtrele'],
            ['name' => 'Listele'],
            ['name' => 'Düzenle',
                'children' => [
                    ['name' => 'BotResimleri'],
                    ['name' => 'Stok'],
                    ['name' => 'UyumluAraçEkle'],
                    ['name' => 'BotİleYenidenÇek'],
                    ['name' => 'HepsiburadaOluştur'],
                    ['name' => 'TrendyolOluştur'],
                    ['name' => 'N11Oluştur'],
                ]
            ],
            ['name' => 'Sil'],
            ['name' => 'Stok',
                'children' => [
                    ['name' => 'Görüntüle'],
                    ['name' => 'Düzenle'],
                ]
            ],
        ]
    ],
    ['name' => 'Kategoriler',
    'children' => [
        ['name' => 'Listele'],
        ['name' => 'Ekle'],
        ['name' => 'Düzenle'],
        ['name' => 'Sil'],
    ]],
    ['name' => 'Markalar',
    'children' => [
        ['name' => 'Listele'],
        ['name' => 'Ekle'],
        ['name' => 'Düzenle'],
        ['name' => 'Sil'],
    ]]
];
