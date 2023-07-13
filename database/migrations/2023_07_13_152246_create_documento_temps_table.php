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
        Schema::create('documento_temps', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_doc');
            $table->integer('folios');
            $table->string('asunto');
            $table->string('archivo');
            $table->dateTime('fecha_ingreso');
            $table->string('estado');
            $table->foreignId('administrado_id')->constrained('administrados')->onDelete('cascade');
            $table->foreignId('tipo_documento_id')->constrained('tipo_documentos')->onDelete('cascade');
            $table->foreignId('procedimiento_id')->constrained('procedimientos')->onDelete('cascade');
            $table->foreignId('oficina_id')->constrained('oficinas')->onDelete('cascade');
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
        Schema::dropIfExists('documento_temps');
    }
};
