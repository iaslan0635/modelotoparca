<?php

namespace App\Lib;

trait EasyDomTrait
{
    /** null safe innertext */
    public function safeInnertext($selector, $idx = null, $default = '')
    {
        $el = $this->find($selector, $idx);

        return is_null($el) ? $default : $el->innertext;
    }

    public function count($selector)
    {
        return count($this->find($selector));
    }

    public function exists($selector, $idx = null)
    {
        return filled($this->find($selector, $idx));
    }

    public function hasChild($selector, $idx = null)
    {
        return filled($this->safeInnertext($selector, $idx, null));
    }
}
