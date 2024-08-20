<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MortalisPecattum extends Model
{
    
    use HasFactory;
    protected $fillable = ['id'];
    public function mortalis(){
        return $this->belongsTo('App\Models\Mortali');
    }
    public function pecatuns(){
        return $this->belongsTo('App\Models\Pecattum');
    }
}
