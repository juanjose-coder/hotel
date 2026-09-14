<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paquete_id')->constrained('paquetes')->onDelete('cascade');
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
           $table->unsignedBigInteger('cod_empleado');
$table->foreign('cod_empleado')->references('cod_empleado')->on('empleados')->onDelete('cascade');
            $table->date('fecha');
            $table->integer('cantidad');
            $table->string('tipopago');
            $table->decimal('totalventa', 8, 2);
            $table->decimal('descuento', 8, 2)->default(0);
            $table->decimal('totalneto', 8, 2);
            $table->boolean('confirmado')->default(false);
            $table->boolean('anulado')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
