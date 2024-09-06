<?php

namespace App\Enums;

enum OrderStatuses: string
{
    case PENDING = 'pending'; // waiting for payment
    case PAID = 'paid'; // paid by the buyer
    case INVALID = 'invalid'; // invalid payment
    case CANCELLED = 'cancelled'; // cancelled by the buyer
    case ACCEPTED = 'accepted'; // accepted by the seller
    case INCARGO = 'incargo'; // in cargo
    case DELIVERED = 'delivered'; // delivered to the buyer
    case REJECTED = 'rejected'; // rejected by the seller
    case RETURNED = 'returned'; // refund
    case COMPLETED = 'completed'; // success
}
