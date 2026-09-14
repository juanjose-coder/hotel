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
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destino_id')->constrained('destinos')->onDelete('cascade');
            $table->string('tipo');
            $table->string('nombre');
            $table->decimal('preciocosto', 8, 2);
            $table->decimal('precioventa', 8, 2);
            $table->date('fechainicio')->nullable();
            $table->date('fechatermino')->nullable();
            $table->string('categoria')->nullable();
            $table->date('fechaconfirmacion')->nullable();
            $table->integer('cupos')->default(0);
            $table->boolean('vigente')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paquetes');
    }
};