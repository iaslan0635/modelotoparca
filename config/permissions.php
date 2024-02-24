<?php

return [
    [
        'name' => 'Ürünler',
        'children' => [
            ['name' => 'Listele',
                'children' => [
                    ['name' => 'BotResimleri',
                        'children' => [
                            ['name' => 'Düzenle'],
                        ],
                    ] ],
            ],
            ['name' => 'Ekle'],
            ['name' => 'Düzenle',
                'children' => [
                    ['name' => 'Stok'],
                    ['name' => 'UyumluAraçEkle'],
                    ['name' => 'BotİleYenidenÇek'],
                    ['name' => 'HepsiburadaOluştur'],
                    ['name' => 'TrendyolOluştur'],
                    ['name' => 'N11Oluştur'],
                ]],
            ['name' => 'Sil'],
            ['name' => 'Stok',
                'children' => [
                    ['name' => 'Görüntüle'],
                    ['name' => 'Düzenle'],
                ]
            ],
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
]
];
