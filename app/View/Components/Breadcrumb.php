<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    private $presetParts;

    public function __construct(public array $parts)
    {
        $temp = array_map(fn($p) => $this->replacePart($p), $this->parts);
        $this->presetParts = [
            "categories" => ["name" => "Kategoriler", "link" => route("category.index")]
        ];
    }

    public function render(): View
    {
        return view('components.breadcrumb');
    }

    public function getParts()
    {
        return [
            [
                "name" => "Anasayfa",
                "link" => route("welcome")
            ],
            ...array_map(fn($p) => $this->replacePart($p), $this->parts)
        ];
    }

    private function replacePart($part)
    {
        if (is_array($part)) return $part;
        return $this->presetParts[$part];
    }
}
