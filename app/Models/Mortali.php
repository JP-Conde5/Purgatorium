<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mortali extends Model
{
    use HasFactory;
    protected $fillable =["nomeMortalis", "dataMorte", "filosofoPreferido", "timeCoracao", "nacionalidade", "karma", "idDestination"];
    public function pecattums(){
        return $this->hasMany('App\Models\MortalisPecattum', 'idPecattum');
    }
    public function virtus(){
        return $this->hasMany('App\Models\MortalisVirtu', 'idVirtus');
    }
    public function destinations(){
        return $this->belongsTo('App\Models\Destination');
    }
}
