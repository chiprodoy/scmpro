<?php

namespace App\View\Components\Adminlte;


class DataGrid extends MainComponent
{
    /**
     * The data grid title.
     *
     * @var string
     */
    public $title;
    /**
     * The data grid url to read data.
     *
     * @var string
     */
    public $url;
    /**
     * The data grid inline style css
     *
     * @var string
     */
    public $style;
    /**
     * The data grid id
     *
     * @var string
     */
    public $id;
    /**
     * The data grid rownumber
     *
     * @var boolean
     */
    public $rowNumber;

     /**
     * The data grid pagination
     *
     * @var boolean
     */
    public $pagination;

     /**
     * The data grid header column
     *
     * @var array
     */
    public $tableHeader;

       /**
     * The data grid http method to request data get/post default get
     *
     * @var string
     */
    public $HTTPMethod;
    /**
     * The data grid paging sizze (limit)
     *When set pagination property, initialize the page size.
     * @var int
     */
    public $pageSize=50;
    /**
     * The data grid loading message
     *
     * @var string
     */
    public $loadMsg;
    /**
     * page list display.
     *
     * @array
     */
    public $pageList=[100,50,30,10];
        /**
     * data to display.
     *
     * @array
     */
    public $datas;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$controllerName,$title,$url,array $tableHeader,
    $HTTPMethod='get',$mustCheckingRole=false,$pagination=true,$style="",$rowNumber=true,
    $loadMsg="Sedang memproses, Silahkan tunggu...",$datas=[])
    {
        $this->id=$id;
        $this->mustCheckingRole=$mustCheckingRole;
        $this->title=$title;
        $this->url = (empty($url) ? $controllerName : $url);
        $this->style=(empty($style) ? "width:100%;height:430px" : $style);
        $this->rowNumber=($rowNumber ? 'true':'false');
        $this->pagination=($pagination ? 'true':'false');
        $this->tableHeader=$tableHeader;
        $this->HTTPMethod=$HTTPMethod;
        $this->loadMsg=$loadMsg;
        $this->datas=$datas;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.adminlte.data-grid');
    }
}
