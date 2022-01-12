<?php

namespace App\Models;

use App\Models\MainModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends MainModel
{
    use HasFactory;
    protected $fillable = [
        'role_name','user_modify'
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function menus(){
        return $this->belongsToMany(\App\Models\Menu::class);
    }

    public static function searchable(){
        return ['role_name'];
    }

    public static function viewable(){
        return [
            ['field'=>'role_name','label'=>'Role Name'],
        ];
    }

}
