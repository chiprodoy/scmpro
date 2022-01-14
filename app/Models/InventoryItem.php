<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItem extends MainModel
{
    use HasFactory;
    protected $fillable = [
        'name','produsen_id','inventory_id','unit_measure_id'
    ];
    public static function searchable(){
        return ['name'];
    }

    public static function viewable(){
        return [
            ['field'=>'name','title'=>'Nama Barang'],
            ['field'=>'produsen_id','title'=>'Produsen'],
            ['field'=>'inventory_id','title'=>'Gudang'],
            ['field'=>'unit_measure_id','title'=>'Satuan'],
         ];
    }
}
