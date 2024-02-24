<?php

return [
    [
        'name' => 'Ürünler',
        'children' => [
            ['name' => 'Arama'],
            ['name' => 'Filtrele'],
            ['name' => 'Listele'],
//            ['name' => 'Ekle'],
            ['name' => 'Düzenle',
                'children' => [
                    ['name' => 'BotResimleri'],
                    ['name' => 'Stok'],
                    ['name' => 'Uyumlu Araç Ekle'],
                    ['name' => 'Bot İle Yeniden Çek'],
                    ['name' => 'Hepsiburada Oluştur'],
                    ['name' => 'Trendyol Oluştur'],
                    ['name' => 'N11 Oluştur'],
                ]
            ],
            ['name' => 'Sil'],
            ['name' => 'Stok',
                'children' => [
                    ['name' => 'Görüntüle'],
                    ['name' => 'Düzenle'],
                ]
            ]

        ]
    ],
    [
    'name' => 'Kategoriler',
    'children' => [
        ['name' => 'Listele'],
        ['name' => 'Ekle'],
        ['name' => 'Düzenle'],
        ['name' => 'Sil'],
    ]
    ],
    [
    'name' => 'Markalar',
    'children' => [
        ['name' => 'Listele'],
        ['name' => 'Ekle'],
        ['name' => 'Düzenle'],
        ['name' => 'Sil'],
    ]
    ]
];
