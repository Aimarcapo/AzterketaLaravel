<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etxe extends Model
{
    /** @use HasFactory<\Database\Factories\EtxeFactory> */
    use HasFactory;
    protected $fillable = ['helbidea','logelak','eraikuntza_urtea'];
    public function alokairu() {
        return $this->hasOne(Alokairu::class);
    }
}
