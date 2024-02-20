<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recurso extends Model
{
    use HasFactory;
   
    protected  $fillable = [
    "id_tipos",
    "titulo",
    "id_stacks",
    "responsable",
    "grabacion",
    "presentacion",
    "repo",
    "id_extras"
    ];

    public function tipo():BelongsTo{
        return $this->belongsTo(Tipo::class,'id_tipos');
    }
    public function stack():BelongsTo{
        return $this->belongsTo(Stack::class,'id_stacks');
    }
    public function extra():BelongsTo{
        return $this->belongsTo(Extra::class,'id_extras');
    }


}
