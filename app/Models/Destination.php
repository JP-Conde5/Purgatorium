<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = ['nomeDestination', 'descricao', 'karmaMin', 'karmaMax'];
    public function mortalis(){
        return $this->belongsTo('App\Models\Mortali');
    }
}
