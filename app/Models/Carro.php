<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carro extends Model
{
    protected $fillable = [
        'ano',
        'modelo',
        'marca',
        'dono_id'
        
    ];

    public function Dono(): BelongsTo 
    {
        return $this->belongsTo(Dono::class);
    }

}


