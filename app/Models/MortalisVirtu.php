<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MortalisVirtu extends Model
{
    use HasFactory;
    protected $fillable = ['id'];
    public function mortalis(){
        return $this->belongsTo('App\Models\Mortali');
    }
    public function virtus(){
        return $this->belongsTo('App\Models\Virtu');
    }
}
