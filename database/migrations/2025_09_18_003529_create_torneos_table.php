<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('torneos', function (Blueprint $table) {
            $table->id('IdTorneos'); // PK
            $table->string('Nombre');
            $table->text('Descripcion')->nullable();
            $table->integer('Reservas')->default(0);
            $table->date('Fecha');
            $table->time('Hora');
            $table->string('Premio')->nullable();

            // Relación con administrador (quien crea el torneo)
            $table->unsignedBigInteger('IdAdministrador');
            $table->foreign('IdAdministrador')->references('id')->on('users')->onDelete('cascade');

            // Relación con juegos
            $table->unsignedBigInteger('IdJuegos');
            $table->foreign('IdJuegos')->references('IdJuegos')->on('juegos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('torneos');
    }
};
