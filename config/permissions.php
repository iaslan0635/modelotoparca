<?php

return [
    [
        'name' => 'Ürünler',
        'children' => [
            ['name' => 'Listele',
                'children' => [
                    ['name' => 'BotEşleşmeleri',
                        'children' => [
                            ['name' => 'Düzenle'],

                        ],
                    ],
                    ['name' => 'Ürün Bilgileri'],
                    ['name' => 'Oem Kodlar', 'children' => [
                        ['name' => 'Ekle'],

                    ]],
                    ['name' => 'BotResimleri',
                        'children' => [
                            ['name' => 'Düzenle'],

                        ],
                    ],

               ['name' => 'Stok'],
                ['name' => 'UyumluAraçEkle'],
                ['name' => 'BotİleYenidenÇek'],
                ['name' => 'HepsiburadaOluştur'],
                ['name' => 'TrendyolOluştur',
                    'children' => [
                        ['name' => 'Düzenle'],

                    ]],
                ['name' => 'N11Oluştur',
                    'children' => [
                        ['name' => 'Düzenle'],

                    ]],

                ],
            ],
            ['name' => 'Ekle'],
            ['name' => 'Düzenle',
                'children' => [
                    ['name' => 'Test'],
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
