<?php

namespace App\Enums;

enum HepsiburadaProductStatus: string
{
    case WAITING = "WAITING|Bekliyor";
    case IN_EXTERNAL_PROGRESS = "IN_EXTERNAL_PROGRESS|IN_EXTERNAL_PROGRESS";
    case PRE_MATCHED = "PRE_MATCHED|Eşleşen";
    case MATCHED = "MATCHED|Satışa Hazır";
    case REJECTED = "REJECTED|Reddedilen Eşleşme";
    case MATCHED_WITH_STAGED = "MATCHED_WITH_STAGED|Ön Katalog Eşleşen";
    case MISSING_INFO = "MISSING_INFO|Eksik Bilgi";
    case CREATED = "CREATED|Yaratıldı";
    case BLOCKED = "BLOCKED|Yasaklandı";
}
