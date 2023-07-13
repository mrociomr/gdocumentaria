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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_doc');
            $table->integer('folios');
            $table->string('asunto');
            $table->string('archivo');
            $table->dateTime('fecha_ingreso');
            $table->dateTime('fecha_doc');
            $table->integer('num_tramite');
            $table->string('observaciones');
            $table->string('estado');
            $table->string('inf_respuesta');
            $table->foreignId('administrado_id')->constrained('administrados')->onDelete('cascade');
            $table->foreignId('tipo_documento_id')->constrained('tipo_documentos')->onDelete('cascade');
            $table->foreignId('indicacion_id')->constrained('indicacions')->onDelete('cascade');
            $table->foreignId('procedimiento_id')->constrained('procedimientos')->onDelete('cascade');
            $table->foreignId('oficina_id')->constrained('oficinas')->onDelete('cascade');
            $table->foreignId('asignacion_id')->constrained('asignacions')->onDelete('cascade');
            $table->foreignId('movimiento_id')->constrained('movimientos')->onDelete('cascade');
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
        Schema::dropIfExists('documentos');
    }
};
