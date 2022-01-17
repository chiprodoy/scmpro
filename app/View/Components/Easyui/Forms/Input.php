<?php

namespace App\View\Components\Easyui\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * The input type.
     *
     * @string
     */
    public $type;
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
     * The input label.
     *
     * @string
     */
    public $label;
        /**
     * The input value.
     *
     * @string
     */
    public $value;
    /*
    */

    public $inline=true;

    /*
    */
    public $readOnly='';
    /*
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$id,$name,$label='',$inline=false,$readOnly=false,$value='')
    {
        $this->type=$type;
        $this->id=$id;
        $this->name=$name;
        $this->label=(isset($label) ? $label : str_replace('_',' ',$name));
        $this->value=$value;
        $this->inline=$inline;
        $this->readOnly=$readOnly;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.easyui.forms.input');
    }
}
