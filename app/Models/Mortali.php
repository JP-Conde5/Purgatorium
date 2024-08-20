<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mortali extends Model
{
    use HasFactory;
    protected $fillable =["nome","Karma"];
    public function Pecattum(){
        return $this->hasMany('App\Models\MortalisPecattum', 'id_pecattum');
    }
    public function Virtu(){
        return $this->hasMany('App\Models\MortalisVirtu', 'id_virtu');
    }
}
