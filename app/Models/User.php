<?php

namespace App\Models;

use App\Enums\OrderStatuses;
use App\Events\UserActiveStateChangedEvent;
use App\Events\UserBanStateChangedEvent;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $withCount = ['pendingOrders', 'orders'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'date_of_birth',
        'gender',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function fullName(): Attribute
    {
        return Attribute::get(fn () => "$this->first_name $this->last_name");
    }

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function pendingOrders(): HasMany
    {
        return $this->hasMany(Order::class)->where('payment_status', '=', OrderStatuses::PENDING);
    }

    public function whislist(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    protected static function booted(): void
    {
        static::updated(function (User $user) {
            if ($user->wasChanged('banned')) {
                dispatch(new UserBanStateChangedEvent($user));
            }
            if ($user->wasChanged('is_active')) {
                dispatch(new UserActiveStateChangedEvent($user));
            }
        });
    }

    public function routeNotificationForNetgsm()
    {
        return '5050000000'; // ???
    }
}
