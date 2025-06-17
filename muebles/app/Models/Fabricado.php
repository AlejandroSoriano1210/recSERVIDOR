<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricado extends Model
{
    /** @use HasFactory<\Database\Factories\FabricadoFactory> */
    use HasFactory;

    protected $fillable = [ 'ancho', 'alto' ];

    public function mueble()
    {
        return $this->morphOne(Mueble::class, 'muebleable');
    }

    public function precio()
    {
        $alto = $this->alto/1000;
        $ancho = $this->ancho/1000;

        return number_format($this->mueble->precio * $alto * $ancho, 2);
    }
}
