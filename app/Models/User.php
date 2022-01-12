<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;


class User extends Authenticatable
{
    use HasApiTokens,HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = ['updated_at','created_at'];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'updated_at' => 'datetime:Y-m-d H:i:s',
        'created_at' => 'datetime:Y-m-d H:i:s',


    ];

    public static function viewable(){
        return [
            ['field'=>'name','label'=>'Nama'],
            ['field'=>'email','label'=>'email'],
            ['field'=>'password','label'=>'password'],
            ['field'=>'role_id','label'=>'role_id'],
            ['field'=>'created_at','label'=>'create_at'],
            ['field'=>'updated_at','label'=>'update_at'],
            ['field'=>'user_modify','label'=>'user_modify']
        ];
    }

    public static function searchable(){
        return ['name','email'];
    }

    public static function getRelationShip(){
        return null;
    }

    public static function getFilterable(){
        return null;
    }

    public function getFormFields(){
        return $this->scafoldFormFields();
    }

    private function scafoldFormFields(){
        $sch[$this->primaryKey]=(object) ['type'=>'hidden','name'=>$this->primaryKey,'id'=>'id'];
        $sch['name']=(object) ['type'=>'text','name'=>'name','id'=>'name','label'=>'Nama','required'=>'required','data-ng-disabled'=>'disabled'];
        $sch['email']=(object) ['type'=>'email','name'=>'email','id'=>'name','label'=>'Email','data-ng-disabled'=>'disabled'];
        $relatedData=Role::select('role_name as text','id as reckey')->get()->toArray();
        $sch['role_id'] = (object) ['type'=>'select','list'=>$relatedData,'label'=>'Role','data-ng-disabled'=>'disabled'];
        $sch['password'] = (object) ['type'=>'password','name'=>'password','id'=>'password','label'=>'Password','data-ng-disabled'=>'disabled'];
        $sch['password_confirmation'] = (object) ['type'=>'password','name'=>'password_confirmation','id'=>'password_confirmation','label'=>'Password Confirm','data-ng-disabled'=>'disabled'];


        return $sch;
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }

/*     public function hasPermission($permission) {
        return $this->role->permissions()->where('permission_name', $permission)->first() ?: false;
    } */
    public function hasPermission($permission,$modName) {

   /*       \Illuminate\Support\Facades\DB::enableQueryLog();
        $data=$this->role->permissions()
        ->where('permission_name', $permission)
        ->where('mod_name',"$modName")->first();
        dd($data);
        dd(\Illuminate\Support\Facades\DB::getQueryLog()); */

        return $this->role->permissions()
        ->where('permission_name', $permission)
        ->where('mod_name',"$modName")->first() ?: false;
    }
    public function pegawai()
    {
        return $this->hasOne(Pegawai::class);
    }
}
