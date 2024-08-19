<?php

namespace App\Listeners;

use App\Events;
use App\Models\MerchantOrder;
use App\Models\Order;

class MerchantOrderHistoryListener
{
    public function __construct()
    {
    }

    public function handle(object $event): void
    {
        /** @var MerchantOrder $order */
        $order = $event->order;

        $message = $this->getMessage($event);
        $order->history()->create([
            'message' => $message,
            'status' => $order->shipment_status,
        ]);
    }

    private function getMessage(object $event): string
    {
        return match (true) {
            $event instanceof Events\MerchantOrderCreatedEvent => 'Sipariş oluşturuldu',
            $event instanceof Events\MerchantShipmentStatusChangedEvent => 'Sipariş durumu değişti',
            $event instanceof Events\MerchantShipmentAddressChangedEvent => 'Kargo adresi değişti',
            $event instanceof Events\MerchantInvoiceAddressChangedEvent => 'Fatura adresi değişti',
            $event instanceof Events\MerchantPaymentStatusChangedEvent => 'Ödeme durumu değişti',
            default => $event::class,
        };
    }
}
