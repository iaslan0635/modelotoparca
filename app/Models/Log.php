<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Log extends BaseModel
{
    protected $casts = [
        'context' => 'array',
    ];

    public static function log(
        int     $productId,
        string  $message,
        array   $context = null,
        string  $source = null,
        ?string $logContextId = null
    )
    {
        return static::create([
            'product_id' => $productId,
            'message' => $message,
            'context' => $context,
            'source' => $source,
            'created_at' => now(), // use more accurate time (instead of insertion time)
            'context_id' => $logContextId,
        ]);
    }

    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    protected function sourceColor(): Attribute
    {
        return Attribute::get(
            function () {
                if (str_starts_with($this->source, 'bot')) {
                    return 'primary';
                }
                if ($this->source === 'excel') {
                    return 'success';
                }

                return 'dark';
            }
        );
    }
}
