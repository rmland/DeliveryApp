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
        Schema::connection('mysql_second')->create('pedidos', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('cliente_id');
                $table->dateTime('fecha'); 
                $table->decimal('total', 10, 2); 
                $table->enum('estado', ['pendiente', 'en_proceso', 'completado', 'cancelado'])->default('pendiente');
                $table->string('direccion_envio')->nullable(); 
                $table->text('notas')->nullable(); 
                $table->timestamps();
        });
        Schema::connection('mysql_second')->create('pedido_has_plato', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('pedido_id'); 
            $table->unsignedBigInteger('plato_id'); 
            $table->integer('cantidad'); 
            $table->decimal('precio_unitario', 10, 2);
            $table->decimal('subtotal', 10, 2); 
            $table->timestamps();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('plato_id')->references('id')->on('platos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
        Schema::dropIfExists('pedido_has_plato');
    }
};
