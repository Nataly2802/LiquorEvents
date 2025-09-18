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
    Schema::create('productos', function (Blueprint $table) {
        $table->id('IdProducto'); // Clave primaria
        $table->string('codigo')->unique();
        $table->string('Nombre');
        $table->integer('Stock_total');
        $table->string('Unidad_medida');
        $table->decimal('Precio_compra', 10, 2);
        $table->decimal('Precio_venta', 10, 2);
        $table->string('Marca')->nullable();
        $table->string('Referencia')->nullable();
        $table->enum('Estado', ['activo', 'inactivo'])->default('activo');
        $table->string('Tipo_producto');
        
        // Relaciones
        $table->unsignedBigInteger('IdCategoria')->nullable();
        $table->unsignedBigInteger('IdDistribuidor')->nullable();

        // Foto (ruta de imagen en el storage)
        $table->string('Foto')->nullable();

        $table->timestamps();

        // Llaves foráneas
        $table->foreign('IdCategoria')->references('id')->on('categorias')->onDelete('set null');
        $table->foreign('IdDistribuidor')->references('id')->on('distribuidores')->onDelete('set null');
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
