<?php

return [
    [
        'name' => 'Stok Yönetimi',
        'children' => [
            [
                'name' => 'Ürünler',
                'children' => [
                    ['name' => 'Listele'],
                    ['name' => 'Ara'],
                    ['name' => 'Dışarı Aktar'],
                    [
                        'name' => 'Filtrele',
                        'children' => [
                            ['name' => 'Marka'],
                            ['name' => 'Durum'],
                        ],
                    ],
                    [
                        'name' => 'Detay Görüntüle',
                        'children' => [
                            ['name' => 'Bot ile Yeniden Çek'],
                            ['name' => 'Hepsiburada Oluştur'],
                            ['name' => 'Trendyol Oluştur'],
                            ['name' => 'N11 Oluştur'],
                            [
                                'name' => 'Bot Eşleşmeleri',
                                'children' => [
                                    ['name' => 'İşlem Yap'],
                                ],
                            ],
                            ['name' => 'Bilgileri'],
                            [
                                'name' => 'Oem Kodlar',
                                'children' => [
                                    ['name' => 'Ekle'],
                                ],
                            ],
                            [
                                'name' => 'Uyumlu Araçlar',
                                'children' => [
                                    ['name' => 'İşlem Yap'],
                                ],
                            ],
                            ['name' => 'Sipariş Geçmişi'],
                            ['name' => 'Yorum Geçmişi'],
                            ['name' => 'Mağaza Soruları'],
                            ['name' => 'Bot Kayıtları'],
                            [
                                'name' => 'Bot Resimleri',
                                'children' => [
                                    ['name' => 'İşlem Yap'],
                                ],
                            ],
                            [
                                'name' => 'Trendyol Özellik Eşleştirme',
                                'children' => [
                                    ['name' => 'İşlem Yap'],
                                ],
                            ],
                            [
                                'name' => 'Hepsiburada Özellik Eşleştirme',
                                'children' => [
                                    ['name' => 'İşlem Yap'],
                                ],
                            ],
                            [
                                'name' => 'N11 Özellik Eşleştirme',
                                'children' => [
                                    ['name' => 'İşlem Yap'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Kategoriler',
                'children' => [
                    ['name' => 'Listele'],
                    ['name' => 'Ara'],
                    ['name' => 'Ekle'],
                    [
                        'name' => 'Düzenle',
                        'children' => [
                            ['name' => 'İsim'],
                            ['name' => 'Açıklama'],
                            ['name' => 'Resim'],
                        ],
                    ],
                    ['name' => 'Sil'],
                ],
            ],
            [
                'name' => 'Markalar',
                'children' => [
                    ['name' => 'Listele'],
                    ['name' => 'Ara'],
                    [
                        'name' => 'Düzenle',
                        'children' => [
                            ['name' => 'İsim'],
                            ['name' => 'Açıklama'],
                            ['name' => 'Resim'],
                        ],
                    ],
                ],
            ],
        ],
    ],
    [
        'name' => 'Kullanıcı İşlemleri',
        'children' => [
            [
                'name' => 'Kullanıcılar',
                'children' => [
                    ['name' => 'Listele'],
                    ['name' => 'Ekle'],
                    [
                        'name' => 'Düzenle',
                        'children' => [
                            ['name' => 'Ad'],
                            ['name' => 'Soyad'],
                            ['name' => 'Eposta'],
                            ['name' => 'Şifre'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Yöneticiler',
                'children' => [
                    ['name' => 'Listele'],
                    ['name' => 'Ekle'],
                    [
                        'name' => 'Düzenle',
                        'children' => [
                            ['name' => 'Ad'],
                            ['name' => 'Soyad'],
                            ['name' => 'Eposta'],
                            ['name' => 'Şifre'],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Roller',
                'children' => [
                    ['name' => 'Listele'],
                    ['name' => 'İzinleri Görüntüle'],
                    ['name' => 'İzinleri Düzenle'],
                    ['name' => 'Ekle'],
                    ['name' => 'Sil'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Aktarma İşlemleri',
        'children' => [
            [
                'name' => 'İçe Aktar',
                'children' => [
                    ['name' => 'ITEMS WEB'],
                    ['name' => 'ITEMS WEB EK'],
                    ['name' => 'ITEMS SUBS'],
                    ['name' => 'ITEMCLSAS'],
                    ['name' => 'FILTER_OIL'],
                    ['name' => 'MARKALAR'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Analizler',
        'children' => [
            ['name' => 'Arama İstatistikleri'],
            [
                'name' => 'Arama Düzeltmleri',
                'children' => [
                    ['name' => 'Listele'],
                    ['name' => 'Ekle'],
                    ['name' => 'Sil'],
                ],
            ],
            [
                'name' => 'Araçlar',
                'children' => [
                    ['name' => 'Listele'],
                    ['name' => 'Ara'],
                    ['name' => 'Düzenle'],
                    ['name' => 'Aktif Pasif Yap'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Pazaryerleri',
        'children' => [
            [
                'name' => 'Ürünler',
                'children' => [
                    ['name' => 'Tüm Ürünler'],
                    ['name' => 'Satıştaki Ürünler'],
                    ['name' => 'Hatalı Ürünler'],
                ],
            ],
            [
                'name' => 'Siparişler',
                'children' => [
                    ['name' => 'Tüm Siparişler'],
                    ['name' => 'Kargodaki Siparişler'],
                    ['name' => 'Yeni Siparişler'],
                    ['name' => 'Tamamlanan Siparişler'],
                ],
            ],
            ['name' => 'Kategori Eşitleme'],
            ['name' => 'Marka Eşitleme'],
            ['name' => 'Entegrasyon Ayarları'],
        ],
    ],
    [
        'name' => 'Eticaret Yönetimi',
        'children' => [
            [
                'name' => 'Siparişler',
                'children' => [
                    ['name' => 'Sipariş Sorgula'],
                    ['name' => 'Tüm Siparişler'],
                    ['name' => 'Kargodaki Siparişler'],
                    ['name' => 'İptal Edilenler'],
                    ['name' => 'Tamamlanan Siparişler'],
                    ['name' => 'Pazaryerleri'],
                ],
            ],
            [
                'name' => 'İade İşlemleri',
                'children' => [
                    [
                        'name' => 'İade Talepleri',
                        'children' => [
                            ['name' => 'Listele'],
                            ['name' => 'İşlem Yap'],
                        ],
                    ],
                    ['name' => 'Tamamlanan İadeler'],
                ],
            ],
        ],
    ],
    [
        'name' => 'Site Yönetimi',
        'children' => [
            [
                'name' => 'Genel Ayarlar',
                'children' => [
                    ['name' => 'Düzenle'],
                ],
            ],
            [
                'name' => 'Sayfalar',
                'children' => [
                    ['name' => 'Düzenle'],
                    ['name' => 'Ekle'],
                ],
            ],
            [
                'name' => 'Yorumlar',
                'children' => [
                    ['name' => 'Düzenle'],
                    ['name' => 'Onayla'],
                ],
            ],
        ],
    ],
];
