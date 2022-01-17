<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;
use Laravel\MF\HasMenuFacades;
use MF\Controllers\ControllerResources;
class CostumerController extends Controller
{
    use HasMenuFacades,ControllerResources{
        ControllerResources::__construct as private __ctrlResConstruct;
        HasMenuFacades::__construct as private __hMFContruct;}

        public $namaModel=Costumer::class;
        public $title="Pelanggan";
        public $controllerName='costumer';

        public function __construct()
        {
           // $this->middleware('auth');
            $this->__ctrlResConstruct();
            $this->__hMFContruct();
            $this->noContentStatus = 200;

        }

    //
}
