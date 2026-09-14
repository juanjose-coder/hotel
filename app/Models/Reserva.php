<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'paquete_id', 'cliente_id', 'cod_empleado', 'fecha', 'cantidad',
        'tipopago', 'totalventa', 'descuento', 'totalneto', 'confirmado', 'anulado',
    ];

    public function paquete()
    {
        return $this->belongsTo(Paquete::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'cod_empleado', 'cod_empleado');
    }
}