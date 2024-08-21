<?php

namespace App\Providers;

use App\Events\AddressCreatedEvent;
use App\Events\BrandChangedEvent;
use App\Events\InvoiceAddressChangedEvent;
use App\Events\InvoiceCreatedEvent;
use App\Events\InvoicePaidDateChangedEvent;
use App\Events\InvoiceRefundChangedEvent;
use App\Events\InvoiceStatusChangedEvent;
use App\Events\MerchantOrderCreatedEvent;
use App\Events\OrderCreatedEvent;
use App\Events\PaymentStatusChangedEvent;
use App\Events\PriceChangedEvent;
use App\Events\ProductCategoryChangedEvent;
use App\Events\ProductChangedEvent;
use App\Events\ProductCreatedEvent;
use App\Events\ProductPropertyChangedEvent;
use App\Events\ProductVariantChangedEvent;
use App\Events\ProductVariantCreatedEvent;
use App\Events\ShipmentAddressChangedEvent;
use App\Events\ShipmentStatusChangedEvent;
use App\Events\TaxChangedEvent;
use App\Events\UserActiveStateChangedEvent;
use App\Events\UserBanStateChangedEvent;
use App\Events\UserRegisteredEvent;
use App\Listeners\AddressCreatedListener;
use App\Listeners\BrandChangedListener;
use App\Listeners\InvoiceAddressChangedListener;
use App\Listeners\InvoiceCreatedListener;
use App\Listeners\InvoicePaidDateChangedListener;
use App\Listeners\InvoiceRefundChangedListener;
use App\Listeners\InvoiceStatusChangedListener;
use App\Listeners\MerchantOrderCreatedListener;
use App\Listeners\OrderCreatedListener;
use App\Listeners\OrderHistoryListener;
use App\Listeners\PaymentStatusChangedListener;
use App\Listeners\PriceChangedListener;
use App\Listeners\ProductCategoryChangedListener;
use App\Listeners\ProductChangedListener;
use App\Listeners\ProductCreatedListener;
use App\Listeners\ProductPropertyChangedListener;
use App\Listeners\ProductVariantChangedListener;
use App\Listeners\ProductVariantCreatedListener;
use App\Listeners\SendNotification;
use App\Listeners\ShipmentAddressChangedListener;
use App\Listeners\ShipmentStatusChangedListener;
use App\Listeners\TaxChangedListener;
use App\Listeners\UserActiveStateChangedListener;
use App\Listeners\UserBanStateChangedListener;
use App\Listeners\UserRegisteredListener;
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
        PaymentStatusChangedEvent::class => [
            SendNotification::class,
            PaymentStatusChangedListener::class,
            OrderHistoryListener::class,
        ],
        ShipmentAddressChangedEvent::class => [
            SendNotification::class,
            ShipmentAddressChangedListener::class,
            OrderHistoryListener::class,
        ],
        ShipmentStatusChangedEvent::class => [
            SendNotification::class,
            ShipmentStatusChangedListener::class,
            OrderHistoryListener::class,
        ],
        InvoiceAddressChangedEvent::class => [
            InvoiceAddressChangedListener::class,
            OrderHistoryListener::class,
        ],
        ProductChangedEvent::class => [
            ProductChangedListener::class,
        ],
        ProductCreatedEvent::class => [
            ProductCreatedListener::class,
        ],
        OrderCreatedEvent::class => [
            SendNotification::class,
            OrderCreatedListener::class,
            OrderHistoryListener::class,
        ],
        AddressCreatedEvent::class => [
            AddressCreatedListener::class,
        ],
        MerchantOrderCreatedEvent::class => [
            SendNotification::class,
            MerchantOrderCreatedListener::class,
        ],
        PriceChangedEvent::class => [
            SendNotification::class,
            PriceChangedListener::class,
        ],
        ProductCategoryChangedEvent::class => [
            ProductCategoryChangedListener::class,
        ],
        ProductPropertyChangedEvent::class => [
            ProductPropertyChangedListener::class,
        ],
        TaxChangedEvent::class => [
            SendNotification::class,
            TaxChangedListener::class,
        ],
        UserActiveStateChangedEvent::class => [
            SendNotification::class,
            UserActiveStateChangedListener::class,
        ],
        ProductVariantChangedEvent::class => [
            ProductVariantChangedListener::class,
        ],
        ProductVariantCreatedEvent::class => [
            ProductVariantCreatedListener::class,
        ],
        InvoiceCreatedEvent::class => [
            SendNotification::class,
            InvoiceCreatedListener::class,
        ],
        InvoiceStatusChangedEvent::class => [
            SendNotification::class,
            InvoiceStatusChangedListener::class,
        ],
        InvoicePaidDateChangedEvent::class => [
            SendNotification::class,
            InvoicePaidDateChangedListener::class,
        ],
        InvoiceRefundChangedEvent::class => [
            SendNotification::class,
            InvoiceRefundChangedListener::class,
        ],
        BrandChangedEvent::class => [
            BrandChangedListener::class,
        ],
        UserRegisteredEvent::class => [
            SendNotification::class,
            UserRegisteredListener::class,
        ],
        UserBanStateChangedEvent::class => [
            SendNotification::class,
            UserBanStateChangedListener::class,
        ],
    ];

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
