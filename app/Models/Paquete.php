<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;

    protected $fillable = [
        'destino_id', 'tipo', 'nombre', 'preciocosto', 'precioventa',
        'fechainicio', 'fechatermino', 'categoria', 'fechaconfirmacion',
        'cupos', 'vigente',
    ];

    public function destino()
    {
        return $this->belongsTo(Destino::class);
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}