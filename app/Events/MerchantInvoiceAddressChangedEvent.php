<?php

namespace App\Events;

use App\Models\MerchantOrder;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MerchantInvoiceAddressChangedEvent
{
    use Dispatchable, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        public MerchantOrder $order
    ) {
        //
    }
}
