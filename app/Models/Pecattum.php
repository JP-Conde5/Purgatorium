<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pecattum extends Model
{
    use HasFactory;
    protected $table = "pecattums";
    protected $fillable = ['nomePecattum', 'descricao', 'karma'];
    public function mortalisPecattums(){
        return $this->hasMany('App\Models\MortalisPecattum', 'idPecattum');
    }
}