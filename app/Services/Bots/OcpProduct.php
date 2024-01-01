<?php

namespace App\Services\Bots;

class OcpProduct
{
    public function __construct(
        public readonly string $url,
        public readonly string $articleId,
        public readonly array  $oems,
        public readonly array  $specs,
        public readonly array  $vehicles,
        public readonly array  $tecdoc,
        public readonly string $title,
        public readonly string $subtitle,
        public readonly string $brand,
        public readonly array  $images,
        public readonly string $category,
        public readonly string $mpn,
        public readonly string $sku,
        public readonly string $gtin13,
    )
    {
    }
}
