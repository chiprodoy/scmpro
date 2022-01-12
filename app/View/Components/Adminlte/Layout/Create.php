<?php

namespace App\View\Components\Adminlte\Layout;

use Illuminate\View\Component;

class Create extends Component
{

    /**
     * define input field
     *
     * @param array
     */
       public $formFields;
    /**
     * controllername for read costum field
     *
     * @param string
     */
    public $controllerName;

   /**
     * controllername for read costum field
     *
     * @param string
     */
    public $action;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($formFields,$controllerName,$action='')
    {
        $this->formFields=$formFields;
        $this->controllerName=$controllerName;
        $this->action = (empty($action) ? $action=$this->controllerName : $action);
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.adminlte.layout.create');
    }
}
