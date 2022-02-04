<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\MF\HasMenuFacades;
use MF\Controllers\ControllerResources;

class InventoryStockController extends Controller
{
    use HasMenuFacades,ControllerResources{
        ControllerResources::__construct as private __ctrlResConstruct;
        HasMenuFacades::__construct as private __hMFContruct;}
        public $namaModel=InventoryItem::class;
        public $title="Stok";
        public $controllerName='inventory_stock';

        public function __construct()
        {
           // $this->middleware('auth');
            $this->__ctrlResConstruct();
            $this->__hMFContruct();
            $this->noContentStatus = 200;

        }
    //
}
