<?php

namespace App\Enums;

enum OrderStatuses: string
{
    case PENDING = 'pending';
    case PAID = 'paid';
    case INVALID = 'invalid';
    case CANCELLED = 'cancelled';
    case ACCEPTED = 'accepted';
    case INCARGO = 'incargo';
    case DELIVERED = 'delivered';
    case REJECTED = 'rejected';
    case RETURNED = 'returned';
    case COMPLETED = 'completed';
}
