<?php

namespace App\Enums;

enum OrderRejectReasonType: string
{
    /** Ürünün stoğu tükenmesi ve gönderimin gecikmesi gibi sebeplerle tedarik edilememesi durumunda seçilmelidir. */
    case OUT_OF_STOCK = 'OUT_OF_STOCK';

    /** Ürün kusurlu/defolu/bozuk olduğu için gönderilememesi durumunda seçilmelidir. */
    case BROKEN_PRODUCT = 'BROKEN_PRODUCT';

    /** Yanlış fiyat beslenmesi durumunda seçilmelidir. */
    case INCORRECT_PRICE = 'INCORRECT_PRICE';

    /** Entegrasyon firmasından kaynaklı olarak hatalı fiyat ya da stok aktarımında yaşanan sorunlarda seçilmelidir. */
    case INTEGRATION_ERROR = 'INTEGRATION_ERROR';

    /** Üründe yapılan indirim sonrası tek bir üründen ve aynı müşteri tarafından toplu olarak satın alınması durumunda seçilmelidir. */
    case BULK_PURCHASE = 'BULK_PURCHASE';

    /** Doğal afet, hastalık, cenaze vb. durumlarda seçilmelidir. */
    case FORCE_MAJEURE = 'FORCE_MAJEURE';
}
