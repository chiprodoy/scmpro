<?php

namespace App\View\Components\Adminlte\Forms;

use Illuminate\View\Component;

class Date extends Input
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.adminlte.forms.date');
    }
}
