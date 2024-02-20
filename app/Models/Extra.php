<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Extra extends Model
{
    use HasFactory;

    protected  $fillable = [
        "titulo",
        "enlace",
    ];
    public function recursos(): BelongsTo{
        return $this->belongsTo(Recurso::class,'id_extras');
    }
}
