<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;
use Laravel\MF\HasMenuFacades;
use Laravel\MF\VarInit;
use MF\Controllers\ControllerResources;
use MF\Controllers\RoleAbility;

class ShiftController extends Controller
{
    use ControllerResources,HasMenuFacades{
        ControllerResources::__construct as private __ctrlResConstruct;
        ControllerResources::getModelRecord as private __ctrlResGetModelRecord;
        HasMenuFacades::__construct as private __hMFContruct;}
    //
    public $namaModel=Shift::class;
    public $title="Shift";
    public $controllerName='shift';

    public function __construct()
    {
       // $this->middleware('auth');
        $this->__ctrlResConstruct();
        $this->__hMFContruct();
    }

    //
}