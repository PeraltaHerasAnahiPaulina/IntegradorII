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
        Schema::create('tipo_entradas', function (Blueprint $table) {
            $table->increments('id',12);
            $table->string('nom_entrada',100);
            $table->integer('entrada_estacionamientos_id')->unsigned()->nullable(); //->nullable()
            $table->foreign('entrada_estacionamientos_id')->references('id')->on('entrada_estacionamientos')->nullable();//->nullable()
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_entradas');
    }
};
