<?php

namespace App\View\Components\Easyui\Forms;

use Illuminate\View\Component;

class Text extends Input
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$name,$label='',$value='')
    {
        $this->type='text';
        $this->id=$id;
        $this->name=$name;
        $this->label=(isset($label) ? $label : str_replace('_',' ',$name));
        $this->value=$value;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.easyui.forms.text');
    }
}
