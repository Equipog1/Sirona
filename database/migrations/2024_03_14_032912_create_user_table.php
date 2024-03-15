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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('usr_nombre')->nullable();
            $table->string('usr_usuario')->nullable();
            $table->string('usr_contrasena')->nullable();
            $table->string('usr_correo')->nullable();
            $table->string('usr_rfc')->nullable();
            $table->date('usr_fecha_nacimiento')->nullable();
            $table->integer('usr_tipo_usuario')->nullable();
            $table->integer('usr_estatus')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
