<?php

namespace App\View\Components\Adminlte\Forms;

use Illuminate\View\Component;

class Hidden extends Component
{

    /**
     * The input id.
     *
     * @string
     */
    public $id;

     /**
     * The input name.
     *
     * @string
     */
    public $name;

    /**
     * The input value.
     *
     * @string
     */
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$name,$value='')
    {
        $this->id=$id;
        $this->name=$name;
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
        return view('components.adminlte.forms.hidden');
    }
}
