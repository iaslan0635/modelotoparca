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

    public function scopeForUser($query)
    {
        return auth()->check()
            ? $query->where("user_id", auth()->id())
            : $query->where("session_id", session()->getId());
    }

    public function scopeList($query, $listName)
    {
        return $query->where("list_name", $listName);
    }

    public static function getListNames()
    {
        return self::forUser()->groupBy("list_name")->pluck("list_name");
    }
}
