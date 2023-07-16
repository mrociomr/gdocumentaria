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
        Schema::create('administrados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_persona_id')->nullable()->constrained('tipo_personas')->onDelete('cascade');
            $table->string('nombres');
            $table->string('dni', 8);
            $table->string('ap_paterno');
            $table->string('ap_materno');
            $table->string('direccion');
            $table->string('correo');
            $table->integer('celular');
            $table->string('razon_social')->nullable();
            // $table->string('departamento');
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
        Schema::dropIfExists('administrados');
    }
};
