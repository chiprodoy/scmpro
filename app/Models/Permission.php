<?php

namespace App\Models;

use App\Models\Mainmodel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends MainModel
{
    use HasFactory;
    protected $fillable = [
        'permission_name','mod_name'
    ];

    public static function searchable(){
        return ['permission_name','model_name'];
    }

    public static function viewable(){
        return [
            ['field'=>'permission_name','label'=>'Permission Name'],
            ['field'=>'mod_name','label'=>'Model Name'],

        ];
    }
}
