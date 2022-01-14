<?php

namespace App\Models;

use App\Models\MainModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends MainModel
{
    use HasFactory;
    protected $fillable = [
        'iventory_name','iventory_location'
    ];
    public static function searchable(){
        return ['iventory_name','iventory_location'];
    }

    public static function viewable(){
        return [
            ['field'=>'iventory_name','title'=>'Nama Gudang'],
            ['field'=>'iventory_location','title'=>'Alamat Gudang'],
         ];
    }
}
