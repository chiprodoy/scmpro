<?php

namespace App\Http\Controllers;

use App\Models\Produsen;
use Illuminate\Http\Request;
use Laravel\MF\HasMenuFacades;
use MF\Controllers\ControllerResources;

class ProdusenController extends Controller
{
    use HasMenuFacades,ControllerResources{
        ControllerResources::__construct as private __ctrlResConstruct;
        HasMenuFacades::__construct as private __hMFContruct;}

        public $namaModel=Produsen::class;
        public $title="Produsen";
        public $controllerName='produsen';

        public function __construct()
        {
           // $this->middleware('auth');
            $this->__ctrlResConstruct();
            $this->__hMFContruct();
            $this->noContentStatus = 200;

        }

    //
}
