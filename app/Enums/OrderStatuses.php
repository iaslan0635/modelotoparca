<?php

namespace App\Enums;

enum OrderStatuses: string
{
    case PENDING = 'pending';
    case PAID = 'paid';
    case INVALID = 'invalid'; // invalid payment
    case CANCELLED = 'cancelled'; // cancelled by the buyer
    case ACCEPTED = 'accepted';
    case INCARGO = 'incargo';
    case DELIVERED = 'delivered';
    case REJECTED = 'rejected'; // rejected by the seller
    case RETURNED = 'returned'; // refund
    case COMPLETED = 'completed'; // success
}
