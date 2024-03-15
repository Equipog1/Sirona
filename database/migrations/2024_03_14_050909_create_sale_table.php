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
        Schema::create('sale', function (Blueprint $table) {
            $table->id();
            $table->string('prd_nombre')->nullable();
            $table->double('vta_cantidad')->nullable();
            $table->date('vta_fecha')->nullable();
            $table->double('vta_total')->nullable();

            $table->foreignId('id_producto')
                ->nullable()
                ->constrained('product')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('id_usuario')
                ->nullable()
                ->constrained('user')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale');
    }
};
