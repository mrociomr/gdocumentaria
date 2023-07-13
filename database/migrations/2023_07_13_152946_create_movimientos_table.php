<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->string('are_origen');
            $table->string('oficina_origen');
            $table->string('usuario_origen');
            $table->string('estado');
            //$table->string('d')
            $table->dateTime('fecha');
            $table->string('observacion');
            $table->string('tipo_movimiento');
            //$table->foreignId('estado_movimiento_id')->constrained('estado_movimientos')->onDelete('cascade');
            $table->foreignId('movimiento_interno_id')->constrained('movimiento_internos')->onDelete('cascade');
            $table->foreignId('movimiento_externo_id')->constrained('movimiento_externos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
};
