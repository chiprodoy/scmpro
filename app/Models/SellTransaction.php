<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellTransaction extends MainModel
{
    use HasFactory;
    protected $invoicePrefix='F/';
    protected $fillable = [
        'invoice_number','invoice_date','costumer_id','due_date','status_invoice','employee_id','total',
        'discount','grand_total','note'
    ];
    public static function searchable(){
        return ['invoice_number','invoice_date','costumer_id','due_date','status_invoice','employee_id','total',
        'discount','grand_total','note'];
    }

    public static function viewable(){
        return [
            ['field'=>'invoice_number','title'=>'Nomor Faktur'],
            ['field'=>'invoice_date','title'=>'Tgl Invoice'],
            ['field'=>'costumer_id','title'=>'Pelanggan'],
            ['field'=>'due_date','title'=>'Tempo'],
            ['field'=>'status_invoice','title'=>'Status'],
            ['field'=>'employee_id','title'=>'Karyawan'],
            ['field'=>'total','title'=>'Total'],
            ['field'=>'discount','title'=>'Diskon'],
            ['field'=>'grand_total','title'=>'Grand Total'],
            ['field'=>'note','title'=>'Catatan'],
        ];
    }
    public function setInvoiceNumberAttribute($value){
        $latest = SellTransaction::latest()->first();
        if($latest){
            $this->attributes['invoice_number'] = $this->invoicePrefix.(str_pad((int)$latest->id + 1, 4, '0', STR_PAD_LEFT));

        }else{
            $this->attributes['invoice_number'] = $this->invoicePrefix.(str_pad( '1', 4, '0', STR_PAD_LEFT));

        }
    }
}
