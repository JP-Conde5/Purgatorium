<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virtu extends Model
{
    use HasFactory;
    protected $fillable=['nomeVirtus', 'descricao', 'karma'];
    public function mortalisVirtu(){
        return $this->hasMany('App\Models\MortalisVirtu', 'id_virtu');
    }
}
