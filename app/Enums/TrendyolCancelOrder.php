<?php

namespace App\Enums;

enum TrendyolCancelOrder: string
{
    case NO_STOCK = "500|Stok tükendi|Ürünün stoğu tükenmesi ve gönderimin gecikmesi gibi sebeplerle tedarik edilememesi durumunda seçilmelidir.";
    case DEFECTIVE = "501|Kusurlu/Defolu/Bozuk Ürün|Ürün kusurlu/defolu/bozuk olduğu için gönderilememesi durumunda seçilmelidir.";
    case ERROR_PRICE = "502|Hatalı Fiyat|Yanlış fiyat beslenmesi durumunda seçilmelidir.";
    case INTEGRATION = "504|Entegrasyon Hatası|Entegrasyon firmasından kaynaklı olarak hatalı fiyat ya da stok aktarımında yaşanan sorunlarda seçilmelidir.";
    case BULK = "505|Toplu Alım|Üründe yapılan indirim sonrası tek bir üründen ve aynı müşteri tarafından toplu olarak satın alınması durumunda seçilmelidir.";
    case MAJEURE = "506|Mücbir Sebep|Doğal afet, hastalık, cenaze vb. durumlarda seçilmelidir";
}
