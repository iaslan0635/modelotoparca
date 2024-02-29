<?php

return [
    [
        'name'     => 'Stok Yönetimi',
        'children' => [
            [
                'name'     => 'Ürünler',
                'children' => [
                    ['name' => 'Ürün Arama'],
                    ['name' => 'Ürün Dışarı Aktar'],
                    [
                        'name'     => 'Filtrele',
                        'children' => [
                            ['name' => 'Marka'],
                            ['name' => 'Durum'],
                        ]
                    ],
                    [
                        'name'     => 'Detay Görüntüle',
                        'children' => [
                            ['name' => 'Bot ile Yeniden Çek'],
                            ['name' => 'Hepsiburada Oluştur'],
                            ['name' => 'Trendyol Oluştur'],
                            ['name' => 'N11 Oluştur'],
                            [
                                'name'     => 'Bot Eşleşmeleri',
                                'children' => [
                                    ['name' => 'İşlem Yap'],
                                ]
                            ],
                            ['name' => 'Ürün Bilgileri'],
                            [
                                'name'     => 'Oem Kodlar',
                                'children' => [
                                    ['name' => 'Ekle'],
                                ]
                            ],
                            [
                                'name'     => 'Uyumlu Araçlar',
                                'children' => [
                                    ['name' => 'İşlem Yap'],
                                ]
                            ],
                            ['name' => 'Sipariş Geçmişi'],
                            ['name' => 'Yorum Geçmişi'],
                            ['name' => 'Mağaza Soruları'],
                            ['name' => 'Bot Kayıtları'],
                            [
                                'name'     => 'Bot Resimleri',
                                'children' => [
                                    ['name' => 'İşlem Yap'],
                                ]
                            ],
                            [
                                'name'     => 'Trendyol Özellik Eşleştirme',
                                'children' => [
                                    ['name' => 'İşlem Yap'],
                                ]
                            ],
                            [
                                'name'     => 'Hepsiburada Özellik Eşleştirme',
                                'children' => [
                                    ['name' => 'İşlem Yap'],
                                ]
                            ],
                            [
                                'name'     => 'N11 Özellik Eşleştirme',
                                'children' => [
                                    ['name' => 'İşlem Yap'],
                                ]
                            ],
                        ],
                    ],
                ]
            ],
            [
                'name'     => 'Kategoriler',
                'children' => [
                    ['name' => 'Kategori Ara'],
                    ['name' => 'Kategori Ekle'],
                    [
                        'name'     => 'Kategori Düzenle',
                        'children' => [
                            ['name' => 'İsim Guncelle'],
                            ['name' => 'Açıklama Guncelle'],
                            ['name' => 'Resim Guncelle'],
                        ]
                    ],
                    ['name' => 'Sil'],
                ]
            ],
            [
                'name'     => 'Markalar',
                'children' => [
                    ['name' => 'Marka Ara'],
                    [
                        'name'     => 'Düzenle',
                        'children' => [
                            ['name' => 'İsim Guncelle'],
                            ['name' => 'Açıklama Guncelle'],
                            ['name' => 'Resim Guncelle'],
                        ]
                    ],
                ]
            ],
        ]
    ],
    [
        'name'     => 'Kullanıcı İşlemleri',
        'children' => [
            [
                'name'     => 'Kullanıcılar',
                'children' => [
                    ['name' => 'Kullanıcı Ekle'],
                    [
                        'name'     => 'Kullanıcı Düzenle',
                        'children' => [
                            ['name' => 'Ad'],
                            ['name' => 'Soyad'],
                            ['name' => 'Eposta'],
                            ['name' => 'Şifre'],
                        ]
                    ],
                ]
            ],
            [
                'name'     => 'Yöneticiler',
                'children' => [
                    ['name' => 'Yönetici Ekle'],
                    [
                        'name'     => 'Yönetici Düzenle',
                        'children' => [
                            ['name' => 'Ad'],
                            ['name' => 'Soyad'],
                            ['name' => 'Eposta'],
                            ['name' => 'Şifre'],
                        ]
                    ],
                ]
            ],
            [
                'name'     => 'Roller',
                'children' => [
                    ['name' => 'İzinleri Görüntüle'],
                    ['name' => 'İzinleri Düzenle'],
                    ['name' => 'Rol Sil'],
                ]
            ],
        ],
    ],
    [
        'name'     => 'Excel İşlemleri',
        'children' => [
            [
                'name'     => 'İçe Aktar',
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
        'name'     => 'Analizler',
        'children' => [
            ['name' => 'Arama İstatistikleri'],
            [
                'name'     => 'Arama Düzeltmleri',
                'children' => [
                    ['name' => 'Düzetlme Ekle'],
                    ['name' => 'Düzetlme Sil'],
                ]
            ],
            [
                'name'     => 'Araçlar',
                'children' => [
                    ['name' => 'Araç Ara'],
                    ['name' => 'Araç Düzenle'],
                    ['name' => 'Aktif Pasif Yap'],
                ]
            ],
        ],
    ],
    [
        'name'     => 'Pazaryerleri',
        'children' => [
            [
                'name'     => 'Ürünler',
                'children' => [
                    ['name' => 'Tüm Ürünler'],
                    ['name' => 'Satıştaki Ürünler'],
                    ['name' => 'Hatalı Ürünler'],
                ]
            ],
            [
                'name'     => 'Siparişler',
                'children' => [
                    ['name' => 'Tüm Siparişler'],
                    ['name' => 'Yeni Siparişler'],
                    ['name' => 'Tamamlanan Siparişler'],
                ]
            ],
            ['name' => 'Kategori Eşitleme'],
            ['name' => 'Marka Eşitleme'],
            ['name' => 'Entegrasyon Ayarları'],
        ],
    ],
    [
        'name'     => 'Eticaret Yönetimi',
        'children' => [
            [
                'name'     => 'Siparişler',
                'children' => [
                    ['name' => 'Sipariş Sorgula'],
                    ['name' => 'Tüm Siparişler'],
                    ['name' => 'Kargodaki Siparişler'],
                    ['name' => 'İptal Edilenler'],
                    ['name' => 'Tamamlanan Siparişler'],
                    ['name' => 'Pazaryerleri'],
                ]
            ],
            [
                'name'     => 'İade İşlemleri',
                'children' => [
                    ['name' => 'İade Sorgula'],
                    [
                        'name'     => 'İade Talepleri',
                        'children' => [
                            ['name' => 'İşlem Yap'],
                        ]
                    ],
                    ['name' => 'Tamamlanan İadeler'],
                ]
            ],
        ],
    ],
    [
        'name'     => 'Site Yönetimi',
        'children' => [
            [
                'name'     => 'Genel Ayarlar',
                'children' => [
                    ['name' => 'Ayar Düzenle'],
                ]
            ],
            [
                'name'     => 'Sayfalar',
                'children' => [
                    ['name' => 'Sayfa Düzenle'],
                    ['name' => 'Yeni Sayfa Ekle'],
                ]
            ],
            [
                'name'     => 'Yorumlar',
                'children' => [
                    ['name' => 'Yorum Düzenle'],
                    ['name' => 'Yorum Onayla'],
                ]
            ],
        ],
    ],
];
