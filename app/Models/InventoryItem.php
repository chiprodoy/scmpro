<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MF\CField;

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
    public function getFormFields(){
        $produsen=Produsen::all();
        $cmbProdusen=[];
        $inventory=Inventory::all();
        $cmbInventory=[];
        $unitMeasure=UnitMeasure::all();
        $cmbUm=[];

        foreach($produsen as $k => $v){
            $cmbProdusen[]=['reckey'=>$v->id,'text'=>$v->produsen_name];
        }
        foreach($inventory as $k => $v){
            $cmbInventory[]=['reckey'=>$v->id,'text'=>$v->iventory_name];
        }
        foreach($unitMeasure as $k => $v){
            $cmbUm[]=['reckey'=>$v->id,'text'=>$v->unit_name];
        }

        $r=$this->scafoldFormFields();
        $r['produsen_id']=new CField('select',['list'=>$cmbProdusen,'label'=>'Produsen']);
        $r['inventory_id']=new CField('select',['list'=>$cmbInventory,'label'=>'Gudang']);
        $r['unit_measure_id']=new CField('select',['list'=>$cmbUm,'label'=>'Satuan']);

        return $r;
    }
    public function produsen(){
        return $this->hasOne(Produsen::class);
    }
}
