<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->id('IdVenta'); // PK
            $table->string('Codigo')->unique();
            $table->date('Fecha');
            $table->time('Hora');
            $table->decimal('Total', 10, 2);
            $table->decimal('Pagado', 10, 2);
            $table->decimal('Cambio', 10, 2);

            // Relación con administrador (quien hace la venta)
            $table->unsignedBigInteger('IdAdministrador');
            $table->foreign('IdAdministrador')->references('id')->on('users')->onDelete('cascade');

            // Relación con cliente (quien compra)
            $table->unsignedBigInteger('IdCliente');
            $table->foreign('IdCliente')->references('IdCliente')->on('cliente')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('venta');
    }
};
