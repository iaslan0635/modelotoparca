<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        \App\Events\PaymentStatusChangedEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\PaymentStatusChangedListener::class,
        ],
        \App\Events\ShipmentAddressChangedEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\ShipmentAddressChangedListener::class,
        ],
        \App\Events\ShipmentStatusChangedEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\ShipmentStatusChangedListener::class,
        ],
        \App\Events\InvoiceAddressChangedEvent::class => [
            \App\Listeners\InvoiceAddressChangedListener::class,
        ],
        \App\Events\ProductChangedEvent::class => [
            \App\Listeners\ProductChangedListener::class,
        ],
        \App\Events\ProductCreatedEvent::class => [
            \App\Listeners\ProductCreatedListener::class,
        ],
        \App\Events\OrderCreatedEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\OrderCreatedListener::class,
        ],
        \App\Events\AddressCreatedEvent::class => [
            \App\Listeners\AddressCreatedListener::class,
        ],
        \App\Events\MerchantOrderCreatedEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\MerchantOrderCreatedListener::class,
        ],
        \App\Events\PriceChangedEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\PriceChangedListener::class,
        ],
        \App\Events\ProductCategoryChangedEvent::class => [
            \App\Listeners\ProductCategoryChangedListener::class,
        ],
        \App\Events\ProductPropertyChangedEvent::class => [
            \App\Listeners\ProductPropertyChangedListener::class,
        ],
        \App\Events\TaxChangedEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\TaxChangedListener::class,
        ],
        \App\Events\UserActiveStateChangedEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\UserActiveStateChangedListener::class,
        ],
        \App\Events\ProductVariantChangedEvent::class => [
            \App\Listeners\ProductVariantChangedListener::class,
        ],
        \App\Events\ProductVariantCreatedEvent::class => [
            \App\Listeners\ProductVariantCreatedListener::class,
        ],
        \App\Events\InvoiceCreatedEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\InvoiceCreatedListener::class,
        ],
        \App\Events\InvoiceStatusChangedEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\InvoiceStatusChangedListener::class,
        ],
        \App\Events\InvoicePaidDateChangedEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\InvoicePaidDateChangedListener::class,
        ],
        \App\Events\InvoiceRefundChangedEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\InvoiceRefundChangedListener::class,
        ],
        \App\Events\BrandChangedEvent::class => [
            \App\Listeners\BrandChangedListener::class,
        ],
        \App\Events\UserRegisteredEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\UserRegisteredListener::class,
        ],
        \App\Events\UserBanStateChangedEvent::class => [
            \App\Listeners\SendNotification::class,
            \App\Listeners\UserBanStateChangedListener::class,
        ],    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
