<?php

namespace App\Http\Controllers;

use App\Models\SellTransaction;
use Illuminate\Http\Request;
use Laravel\MF\HasMenuFacades;
use MF\Controllers\ControllerResources;

class SellTransactionController extends Controller
{
    use HasMenuFacades,ControllerResources{
        ControllerResources::__construct as private __ctrlResConstruct;
        HasMenuFacades::__construct as private __hMFContruct;}

        public $namaModel=SellTransaction::class;
        public $title="Transaksi";
        public $controllerName='sell_transaction';

        public function __construct()
        {
           // $this->middleware('auth');
            $this->__ctrlResConstruct();
            $this->__hMFContruct();
            $this->noContentStatus = 200;

        }
}
