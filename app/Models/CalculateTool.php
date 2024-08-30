<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;

class CalculateTool extends BaseModel
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function forUser()
    {
        return auth()->check()
            ? self::where("user_id", auth()->id())
            : self::where("session_id", session()->getId());
    }
}
