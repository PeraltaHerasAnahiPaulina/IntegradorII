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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id',12);
            $table->String('nombre',80);
            $table->String('ap',80);
            $table->String('am',80);
            $table->String('correo',100)->unique();
            $table->double('matricula',30)->unique();
            $table->String('contraseña',100);
            $table->String('qr')->nullable();
            $table->integer('tipo_entradas_id')->unsigned()->nullable();
            $table->foreign('tipo_entradas_id')->references('id')->on('tipo_entradas')->nullable();
            $table->integer('docencias_id')->unsigned();
            $table->foreign('docencias_id')->references('id')->on('docencias');
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
