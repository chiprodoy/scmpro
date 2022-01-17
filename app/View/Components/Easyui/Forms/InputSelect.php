<?php

namespace App\View\Components\Easyui\Forms;

use Illuminate\View\Component;

class InputSelect extends Input
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
     * The input label.
     *
     * @string
     */
    public $label;

    /*
    * option for select [['reckey'=>'','text'=>]]
    */
    public $option;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$name,$label,$option,$value='',$inline=true)
    {
        $this->id=$id;
        $this->name=$name;
        $this->value=$value;
        $this->label=$label;
        $this->option=$option;
        $this->inline=$inline;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.easyui.forms.input-select');
    }
}
