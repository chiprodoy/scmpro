<?php

namespace App\View\Components\Easyui;

use Illuminate\View\Component;
use tidy;

class DataGrid extends Component
{
    /**/
    public $id;
    /**
     * The data grid title.
     *
     * @var string
     */
    public $title;
    /**
     *
     */
    public $method;

    /** */
    public $idField;
    /** */
    public $url;
    /** */
    public $pageSize=10;
    /** */

    public $pageList=[10,20,30,40,50];
    /** */
    public $queryParams;
    /** */

    public $loadMsg='Processing, please wait …';
    /** */
    public $emptyMsg='No Record Found';
    /** */
    public $pagination=true;
    /** */
    public $singleSelect=true;
    /** */

    public $columns;
    /**
     *
     */
    public $frozenColumns;
    /*
    */
    public $fitColumns=false;
    /*
    */
    public $mustCheckingRole;
     /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$title,$url,$columns,$mustCheckingRole=false,$queryParams=null,$frozenColumns=null,$idField='id',$pageSize=10,$pageList=[10,20,30,40,50],
    $method='GET',$loadMsg='Processing, please wait …',$emptyMsg='No Record Found',$pagination=true,$singleSelect=false,$fitColumns=false)
    {
           $this->id = $id;
           $this->title = $title;
           $this->method = $method;
           $this->idField = $idField;
           $this->url = $url;
           $this->pageSize = $pageSize;
           $this->pageList = $pageList;
           $this->queryParams = $queryParams;
           $this->loadMsg=$loadMsg;
           $this->emptyMsg = $emptyMsg;
           $this->pagination = $pagination;
           $this->singleSelect = $singleSelect;
           $this->columns = $columns;
           $this->frozenColumns = $frozenColumns;
           $this->fitColumns = $fitColumns;
           $this->mustCheckingRole=$mustCheckingRole;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.easyui.data-grid');
    }
}
