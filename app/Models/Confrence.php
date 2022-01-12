<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confrence extends MainModel
{
    use HasFactory;

/*     public static $relasi=[
        'member_type',
        'reviewer',
        'confrence_member',

    ]; */

    protected $fillable = [
        'confrence_name',
        'description',
        'confrence_theme',
        'registration_date',
        'registration_due_date',
        'confrence_date',
        'brochure_file',
        'isActive'
    ];


    public static function searchable(){
        return ['confrence_name','confrence_date'];
    }

    public static function viewable(){
        return [
            ['field'=>'confrence_name','label'=>'Confrence Name'],
            ['field'=>'description','label'=>'description'],
            ['field'=>'confrence_theme','label'=>'Theme'],
            ['field'=>'registration_date','label'=>'Registration Date'],
            ['field'=>'registration_due_date','label'=>'Registration due date'],
            ['field'=>'confrence_date','label'=>'Confrence Date'],
            ['field'=>'brochure_file','label'=>'brochure file'],
            ['field'=>'isActive','label'=>'isActive'],
        ];
    }

    public function member_type()
    {

         return $this->hasMany(\App\Models\MemberType::class);
    }

    public function reviewer()
    {

         return $this->hasMany(\App\Models\Reviewer::class);
    }

    public function confrence_member()
    {

         return $this->hasMany(\App\Models\ConfrenceMember::class);
    }
    public static function getLinkedRelation(){
        return  [
            'member_type'=>['label'=>'Member Type'],
            'reviewer'=>['label'=>'Reviewer'],
            'confrence_member'=>['label'=>'Peserta'],

        ];

    }
}
