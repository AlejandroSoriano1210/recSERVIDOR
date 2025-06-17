<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mueble extends Model
{
    /** @use HasFactory<\Database\Factories\MuebleFactory> */
    use HasFactory;

    protected $fillable = [
        'denominacion',
        'precio',
        'muebleable_type',
        'muebleable_id'
    ];

    public function muebleable()
    {
        return $this->morphTo();
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

    public function precio()
    {
        return $this->muebleable->precio();
    }

    public function ancho()
    {
        return $this->muebleable->ancho ?? '';
    }

    public function alto()
    {
        return $this->muebleable->alto ?? '';
    }
}
