<?php

return [
    [
        'name' => 'Ürünler',
        'children' => [
            ['name' => 'Listele'],
            ['name' => 'Ekle'],
            ['name' => 'Düzenle',
                'children' => [
                    ['name' => 'Resim'],
                    ['name' => 'Stok'],
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
