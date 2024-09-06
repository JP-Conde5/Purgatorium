<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mortali extends Model
{
    use HasFactory;
    protected $fillable =["nomeMortalis", "dataMorte", "filosofo", "time", "nacionalidade", "religiao", "karma", "destination"];
    public function pecattums(){
        return $this->hasMany('App\Models\MortalisPecattum', 'idPecattum');
    }
    public function virtus(){
        return $this->hasMany('App\Models\MortalisVirtu', 'idVirtus');
    }
}
