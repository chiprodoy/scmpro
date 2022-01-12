<?php

namespace App\Http\Controllers;

use App\Models\Confrence;
use Illuminate\Http\Request;
use Laravel\MF\HasMenuFacades;
use MF\Controllers\ControllerResources;

use const App\View\Components\Adminlte\COLHALF;

class ConfrenceController extends Controller
{
    use HasMenuFacades,ControllerResources{
        ControllerResources::__construct as private __ctrlResConstruct;
        HasMenuFacades::__construct as private __hMFContruct;}

    public $namaModel=Confrence::class;
    public $title="Confrence";
    public $controllerName='confrence';
    public $frmColCount=COLHALF;

    public function __construct()
    {
       // $this->middleware('auth');
        $this->__ctrlResConstruct();
        $this->__hMFContruct();
    }
    //
}
