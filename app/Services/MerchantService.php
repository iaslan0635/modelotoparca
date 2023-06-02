<?php

namespace App\Services;

use App\Models\Product;
use App\Services\Merchants\Merchant;
use App\Services\Merchants\TrendyolMerchant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Traits\ForwardsCalls;

/** @mixin Merchant */
class MerchantService
{
    /** @var array<Merchant> */
    protected array $mertchants = [];

    use ForwardsCalls;

    public function __counstruct()
    {
        $this->mertchants[] = new TrendyolMerchant(...$this->idk(TrendyolMerchant::name));
    }

    public function idk(string $name)
    {
        $records = DB::table("merchants")->where("name", $name)->get();
        return $records->mapWithKeys(fn ($record) => [$record->key => $record->value])->all();
    }

    public function __call(string $name, array $arguments)
    {
        $results = [];
        foreach ($this->mertchants as $mertchant) {
            $results[$mertchant::name] = $this->forwardCallTo($mertchant, $name, $arguments);
        }
        return $results;
    }
}
