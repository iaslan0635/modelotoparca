<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public function __construct(public array $parts)
    {
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
            ...$this->parts
        ];
    }
}
