<?php

namespace App\Models;

use App\Models\MainModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produsen extends MainModel
{
    use HasFactory;
    protected $fillable = [
        'produsen_name','address','phone'
    ];
    public static function searchable(){
        return ['produsen_name','address','phone'];
    }

    public static function viewable(){
        return [
            ['field'=>'produsen_name','title'=>'Nama Produsen'],
            ['field'=>'address','title'=>'Alamat Produsen'],
            ['field'=>'phone','title'=>'Nomor Telpon'],


        ];
    }
}
