<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\MF\HasMenuFacades;
use Laravel\MF\VarInit;
use MF\Controllers\ControllerResources;
use MF\Controllers\RoleAbility;

class TestController extends Controller
{
    use ControllerResources,HasMenuFacades{
        ControllerResources::__construct as private __ctrlResConstruct;
        ControllerResources::getModelRecord as private __ctrlResGetModelRecord;
        HasMenuFacades::__construct as private __hMFContruct;}
    //
    public $namaModel=User::class;
    public $title="User";
    public $controllerName='tes';

    public function __construct()
    {
       // $this->middleware('auth');
        $this->__ctrlResConstruct();
        $this->__hMFContruct();
    }

}
