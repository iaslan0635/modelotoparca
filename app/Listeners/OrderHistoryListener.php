<?php

namespace App\Listeners;

use App\Events;
use App\Models\Order;

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
            'status' => $order->status->value,
        ]);
    }

    private function getMessage(object $event): string
    {
        return match (true) {
            $event instanceof Events\OrderCreatedEvent => 'Sipariş oluşturuldu',
            $event instanceof Events\ShipmentStatusChangedEvent => 'Sipariş durumu değişti',
            $event instanceof Events\ShipmentAddressChangedEvent => 'Kargo adresi değişti',
            $event instanceof Events\InvoiceAddressChangedEvent => 'Fatura adresi değişti',
            $event instanceof Events\OrderStatusChangedEvent => 'Ödeme durumu değişti',
            default => $event::class,
        };
    }
}
