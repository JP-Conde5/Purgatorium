<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mortali extends Model
{
    use HasFactory;
    protected $fillable =["nomeMortalis", "anoMorte", "filosofo", "time", "nacionalidade", "religiao", "karma", "destination"];
    public function pecattums(){
        return $this->hasMany('App\Models\MortalisPecattum', 'idPecattum');
    }
    public function virtus(){
        return $this->hasMany('App\Models\MortalisVirtu', 'idVirtus');
    }
    public function julgamento(){
        if($this->karma > 0){
            $this->destination = "Paraíso";
        }else if($this->karma < 0){
            $this->destination = "Inferno";
        }else{
            $this->destination = "Purgatório";
        }
        $this->save();
    }
}
