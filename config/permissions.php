<?php

return [
    [
        'name' => 'Ürünler',
        'children' => [
            ['name' => 'Listele'],
            ['name' => 'Ekle'],
            ['name' => 'Düzenle'],
            ['name' => 'Sil'],
            ['name' => 'Stok',
                'children' => [
                    ['name' => 'Görüntüle'],
                    ['name' => 'Düzenle'],
                ]
            ],
        ]
    ]
];
