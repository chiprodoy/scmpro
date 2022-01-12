<?php

namespace App\View\Components\Adminlte;

use Illuminate\View\Component;

class Paging extends MainComponent
{
    /**
     *
     */

    public $id;
    /**
     *
     */

    public $totalRecord;
    /**
     *
     */

    public $totalRecordPerPage;
    /**
     *
     */

    public $totalPage;
    /**
     *
     */

    public $currentPage;

    /**
     *
     */

    public $currentRecordIndex;
    /**
     *
     */

    public $nextRecordIndex;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id,$totalRecord,$totalRecordPerPage,$currentPage=1,$mustCheckingRole=false)
    {
        $this->id=$id;
        $this->totalRecord=$totalRecord;
        $this->totalRecordPerPage=$totalRecordPerPage;
        $this->currentPage=$currentPage;
        $this->currentRecordIndex=($this->currentPage*$this->totalRecordPerPage)-$this->totalRecordPerPage;
        $this->nextRecordIndex=($this->currentPage*$totalRecord);
        $this->mustCheckingRole=$mustCheckingRole;
        $this->totalPage=$this->totalRecord/$this->totalRecordPerPage;
        //
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.adminlte.paging');
    }
}
