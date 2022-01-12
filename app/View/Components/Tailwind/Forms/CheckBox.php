<?php

namespace App\View\Components\Tailwind\Forms;

use Illuminate\View\Component;

class CheckBox extends Input
{

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.tailwind.forms.check-box');
    }
}
