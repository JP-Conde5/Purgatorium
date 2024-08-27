<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virtu extends Model
{
    use HasFactory;
    protected $fillable=['nomeVirtus', 'descricao', 'karma'];
    public function mortalisVirtus(){
        return $this->hasMany('App\Models\MortalisVirtu', 'idVirtus');
    }
}
