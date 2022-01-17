<?php

namespace App\Models;

use App\Models\MainModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends MainModel
{
    use HasFactory;
    protected $fillable = [
        'costumer_code','costumer_name','costumer_address'
    ];
    public static function searchable(){
        return ['costumer_code','costumer_name','costumer_address'];
    }

    public static function viewable(){
        return [
            ['field'=>'costumer_code','title'=>'Kode Pelanggan'],
            ['field'=>'costumer_name','title'=>'Nama Pelanggan'],
            ['field'=>'costumer_address','title'=>'Alamat Pelanggan'],

         ];
    }

}
