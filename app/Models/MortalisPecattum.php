<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MortalisPecattum extends Model
{
    use HasFactory;
    protected $table = "mortalis_pecattums";
    protected $fillable = ['idPecattum', 'idMortalis'];
    public function mortalis(){
        return $this->belongsTo('App\Models\Mortali');
    }
    public function pecattums(){
        return $this->belongsTo('App\Models\Pecattum');
    }
}
