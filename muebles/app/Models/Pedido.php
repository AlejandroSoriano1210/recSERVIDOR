<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /** @use HasFactory<\Database\Factories\PedidoFactory> */
    use HasFactory;

    protected $fillable = [ 'cantidad', 'mueble_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mueble()
    {
        return $this->belongsTo(Mueble::class);
    }
}
