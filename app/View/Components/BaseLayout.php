<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BaseLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render()
    {
        if (theme()->getOption('layout', 'base') === 'docs') {
            return view('admin.layout/docs/master');
        }

        return theme()->getview('admin.layout/master');
    }
}
