<?php

namespace App\Http\Controllers;

use App\Models\InventoryItem;
use Illuminate\Http\Request;
use Laravel\MF\HasMenuFacades;
use MF\Controllers\ControllerResources;
class InventoryItemController extends Controller
{
    use HasMenuFacades,ControllerResources{
        ControllerResources::__construct as private __ctrlResConstruct;
        HasMenuFacades::__construct as private __hMFContruct;}

        public $namaModel=InventoryItem::class;
        public $title="Barang";
        public $controllerName='inventory_item';

        public function __construct()
        {
           // $this->middleware('auth');
            $this->__ctrlResConstruct();
            $this->__hMFContruct();
            $this->noContentStatus = 200;

        }
    //
}
