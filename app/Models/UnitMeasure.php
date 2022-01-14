<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitMeasure extends MainModel
{
    use HasFactory;
    protected $fillable = [
        'unit_code','unit_name'
    ];
    public static function searchable(){
        return ['unit_code','unit_name'];
    }

    public static function viewable(){
        return [
            ['field'=>'unit_code','title'=>'Kode'],
            ['field'=>'unit_name','title'=>'Label Unit'],
        ];
    }
}
