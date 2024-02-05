<?php

namespace App\Enums;

enum N11ProductStatus: string
{
    case BEFORE_SALE = "1|Before_Sale|Satış Öncesi";
    case ON_SALE = "2|On_Sale|Satışta";
    case OUT_OF_STOCK = "3|Out_of_Stock|Stokta Yok";
    case SALE_CLOSED = "4|Sale_Closed|Satışa Kapalı";
}
