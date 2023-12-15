<?php

namespace App\View\Components\Admin;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use stdClass;

class Input extends Component
{
    public string $id;
    public $value;

    public function __construct(
        public string          $name,
        public string          $label,
        public ?string         $hint = null,
        public string|int|null $default = null,
    )
    {
        $this->id = Str::random();

        $defaultSentinel = new stdClass();
        $this->value = old($this->name, $defaultSentinel);
        if ($this->value === $defaultSentinel) // use default if user has no old data
            $this->value = $this->default;
    }

    public function render(): View
    {
        return view('components.admin.input');
    }
}
