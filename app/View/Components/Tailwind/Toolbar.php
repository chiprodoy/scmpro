<?php

namespace App\View\Components\Tailwind;


class Toolbar extends MainComponent
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
        return view('components.tailwind.toolbar');
    }
}
