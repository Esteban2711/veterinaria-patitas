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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('identificador');
            $table->string('nombre');
            $table->integer('tipo');
            $table->integer('cliente_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
