<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('direccion');
            $table->date('fecha_nacimiento');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('rol', ['administrador', 'empleado', 'cliente']);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
    
};
