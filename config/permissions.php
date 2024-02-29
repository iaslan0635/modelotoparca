<?php

return [
    [
        'name' => 'StokYönetimi',
        'children' => [
            ['name' => 'Ürünler',
                'children' => [
                    ['name' => 'ÜrünArama'],
                    ['name' => 'ÜrünDışarıAktar'],
                    ['name' => 'Filtrele',
                        'children' => [
                            ['name' => 'Marka'],
                            ['name' => 'Durum'],
                        ]],
                    ['name' => 'DetayGörüntüle',
                        'children' => [
                            ['name' => 'BotİleYenidenÇek'],
                            ['name' => 'HepsiburadaOluştur'],
                            ['name' => 'TrendyolOluştur'],
                            ['name' => 'N11Oluştur'],
                            ['name' => 'BotEşleşmeleri',
                                'children' => [
                                    ['name' => 'İşlemYap'],
                                ],
                            ],
                            ['name' => 'ÜrünBilgileri'],
                            ['name' => 'Oem Kodlar',
                                'children' => [
                                ['name' => 'Ekle'],
                            ],],
                            ['name' => 'UyumluAraçlar',
                                'children' => [
                                    ['name' => 'İşlemYap'],
                                ],
                            ],
                            ['name' => 'SiparişGeçmişi'],
                            ['name' => 'YorumGeçmişi'],
                            ['name' => 'MağazaSoruları'],
                            ['name' => 'BotKayıtları'],
                            ['name' => 'BotResimleri',
                                'children' => [
                                    ['name' => 'İşlemYap'],
                                ],
                            ],
                            ['name' => 'TrendyolÖzellikEşleştirme',
                                'children' => [
                                    ['name' => 'İşlemYap'],
                                ]
                            ],
                            ['name' => 'HepsiburadaÖzellikEşleştirme',
                                'children' => [
                                    ['name' => 'İşlemYap'],
                                ]
                            ],
                            ['name' => 'N11ÖzellikEşleştirme',
                                'children' => [
                                    ['name' => 'İşlemYap'],
                                ]
                            ],
                        ],
                    ],
                ] ],
            [
                'name' => 'Kategoriler',
                'children' => [
                    ['name' => 'Listele'],
                    ['name' => 'Ekle'],
                    ['name' => 'Düzenle'],
                    ['name' => 'Sil'],
                ]
            ],
            ['name' => 'Markalar'],
        ]
    ],

    [
    'name' => 'Excel İşlemleri',
    'children' => [
        ['name' => 'İçe Aktar',
            'children' => [
                ['name' => 'ITEM WEB'],
                ['name' => 'ITEM WEB EKLEME MOD'],
                ['name' => 'ITEM SUBS'],
                ['name' => 'ITEMCLSAS'],
                ['name' => 'FILTER_OIL'],
                ['name' => 'MARKALAR'],
            ]
            ],
    ]
]

];
