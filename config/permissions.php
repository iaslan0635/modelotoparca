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
                ]],
            [
                'name' => 'Kategoriler',
                'children' => [
                    ['name' => 'KategoriAra'],
                    ['name' => 'KategoriEkle'],
                    ['name' => 'KategoriDüzenle',
                        'children' => [
                            ['name' => 'İsimGuncelle'],
                            ['name' => 'AçıklamaGuncelle'],
                            ['name' => 'ResimGuncelle'],
                        ]],
                    ['name' => 'Sil'],
                ]
            ],
            ['name' => 'Markalar',
                'children' => [
                    ['name' => 'MarkaAra'],
                    ['name' => 'Düzenle',
                        'children' => [
                            ['name' => 'İsimGuncelle'],
                            ['name' => 'AçıklamaGuncelle'],
                            ['name' => 'ResimGuncelle'],
                        ]],
                ]],
        ]
    ],
    [
        'name' => 'Kullanıcıİşlemleri',
        'children' => [
            ['name' => 'Kullanıcılar',
                'children' => [
                    ['name' => 'KullanıcıEkle'],
                    ['name' => 'KullanıcıDüzenle',
                        'children' => [
                            ['name' => 'Ad'],
                            ['name' => 'Soyad'],
                            ['name' => 'Eposta'],
                            ['name' => 'Şifre'],
                        ]],
                ]
            ],
            ['name' => 'Yöneticiler',
                'children' => [
                    ['name' => 'YöneticiEkle'],
                    ['name' => 'YöneticiDüzenle',
                        'children' => [
                            ['name' => 'Ad'],
                            ['name' => 'Soyad'],
                            ['name' => 'Eposta'],
                            ['name' => 'Şifre'],
                        ]],
                ]
            ],

            ['name' => 'Roller',
                'children' => [
                    ['name' => 'İzinleriGörüntüle'],
                    ['name' => 'İzinleriDüzenle'],
                    ['name' => 'RolSil'],
                ]
            ],
        ],
    ],
    [
        'name' => 'Excelİşlemleri',
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
    ],
    [
        'name' => 'Analizler',
        'children' => [
            ['name' => 'Aramaİstatistikleri'],
            ['name' => 'AramaDüzeltmleri',
                'children' => [
                    ['name' => 'DüzetlmeEkle'],
                    ['name' => 'DüzetlmeSil'],
                ]
            ],
            ['name' => 'Araçlar',
                'children' => [
                    ['name' => 'AraçAra'],
                    ['name' => 'AraçDüzenle'],
                    ['name' => 'AktifPasifYap'],
                ]
            ],
        ],
    ],

    [
        'name' => 'Pazaryerleri',
        'children' => [
            ['name' => 'Ürünler',
                'children' => [
                    ['name' => 'TümÜrünler'],
                    ['name' => 'SatıştakiÜrünler'],
                    ['name' => 'HatalıÜrünler'],
                ]
            ],
            ['name' => 'Siparişler',
                'children' => [
                    ['name' => 'TümSiparişler'],
                    ['name' => 'YeniSiparişler'],
                    ['name' => 'TamamlananSiparişler'],
                ]
            ],
            ['name' => 'KategoriEşitleme'],
            ['name' => 'MarkaEşitleme'],
            ['name' => 'EntegrasyonAyarları'],
        ],
    ],
    [
        'name' => 'EticaretYönetimi',
        'children' => [
            ['name' => 'Siparişler',
                'children' => [
                    ['name' => 'SiparişSorgula'],
                    ['name' => 'TümSiparişler'],
                    ['name' => 'KargodakiSiparişler'],
                    ['name' => 'İptalEdilenler'],
                    ['name' => 'TamamlananSiparişler'],
                    ['name' => 'Pazaryerleri'],
                ]
            ],
            ['name' => 'İadeİşlemleri',
                'children' => [
                    ['name' => 'İadeSorgula'],
                    ['name' => 'İadeTalepleri',
                        'children' => [
                            ['name' => 'İşlemYap'],
                        ]],
                    ['name' => 'Tamamlananİadeler'],
                ]
            ],
        ],
    ],
    [
        'name' => 'SiteYönetimi',
        'children' => [
            ['name' => 'GenelAyarlar',
                'children' => [
                    ['name' => 'AyarDüzenle'],
                ]
            ],
            ['name' => 'Sayfalar',
                'children' => [
                    ['name' => 'SayfaDüzenle'],
                    ['name' => 'YeniSayfaEkle'],
                    ['name' => 'Yorumlar',
                        'children' => [
                            ['name' => 'YorumDüzenle'],
                            ['name' => 'YorumOnayla'],
                        ]],
                ]
            ],
        ],
    ],
];
