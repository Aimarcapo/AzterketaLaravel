<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alokairu extends Model
{
    /** @use HasFactory<\Database\Factories\AlokairuFactory> */
    use HasFactory;
    protected $fillable = ['alokatzailea','etxe_id']; // Campos rellenables
    public function etxe(): BelongsTo
    {
        return $this->belongsTo(Etxe::class);
    }
  
}
