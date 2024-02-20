<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipo extends Model
{
    use HasFactory;

    protected $guarded = [];
   
    public function recursos(): HasMany{
        return $this->hasMany(Recurso::class,'id_tipos');
    }
}


 