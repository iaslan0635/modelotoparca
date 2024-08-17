<?php

namespace App\Listeners;

use App\Events\InvoiceAddressChangedEvent;
use App\Events\OrderCreatedEvent;
use App\Events\PaymentStatusChangedEvent;
use App\Events\ShipmentAddressChangedEvent;
use App\Events\ShipmentStatusChangedEvent;
use App\Models\Order;
use App\Models\OrderHistory;

class OrderHistoryListener
{
    public function __construct()
    {
    }

    public function handle(object $event): void
    {
        /** @var Order $order */
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
            $event instanceof OrderCreatedEvent => 'Sipariş oluşturuldu',
            $event instanceof ShipmentStatusChangedEvent => 'Sipariş durumu değişti',
            $event instanceof ShipmentAddressChangedEvent => 'Kargo adresi değişti',
            $event instanceof InvoiceAddressChangedEvent => 'Fatura adresi değişti',
            $event instanceof PaymentStatusChangedEvent => 'Ödeme durumu değişti',
            default => $event::class,
        };
    }
}
