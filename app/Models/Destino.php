<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    protected $fillable = [
        'ciudad',
    ];

    public function paquetes()
    {
        return $this->hasMany(Paquete::class);
    }
}
