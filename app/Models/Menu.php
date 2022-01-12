<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory,SoftDeletes;

    public function childrenMenu()
    {
        return $this->hasMany('App\Models\Menu', 'parent_id', 'id');
    }
    public function hasChildrenMenu(){
        return $this->childrenMenu()->where('parent_id',$this->id)
        ->first() ?: false;
    }
    public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class,'menu_role');
    }

    public function hasRole($roleId){
        return $this->roles()->where('role_id',$roleId)
        ->first() ?: false;
    }

    public function parentMenu()
    {
        return $this->belongsTo(App\Models\Menu::class, 'parent_id');
    }
}
