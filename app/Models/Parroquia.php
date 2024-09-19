<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'cod_postal', 'municipio_id'];

    public function parroquia()
    {
        return $this->belongsTo(Parroquia::class);
    }

    public function totalizacion()
    {
        return $this->hasOne(Totalizacion::class);
    }
}
