<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dono extends Model
{
    protected $fillable = [
        'nome'
       
        
    ];

    public function carro(): HasMany 
    {
        return $this->hasMany(Carro::class);
    }
}
