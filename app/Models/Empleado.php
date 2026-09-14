<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $primaryKey = 'cod_empleado';

    protected $fillable = [
        'nombrec', 'dni', 'direccion', 'cargo',
    ];

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'cod_empleado', 'cod_empleado');
    }
}