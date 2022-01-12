<?php

namespace App\View\Components\Easyui;

use Illuminate\View\Component;

class CrudToolbar extends MainComponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mustCheckingRole=false)
    {
        $this->mustCheckingRole=$mustCheckingRole;

        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.easyui.crud-toolbar');
    }
}
