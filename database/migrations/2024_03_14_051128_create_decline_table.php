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
        Schema::create('decline', function (Blueprint $table) {
            $table->id();
            $table->string('bja_nombre')->nullable();
            $table->double('bja_cantidad')->nullable();
            $table->date('bja_caducidad')->nullable();
            $table->string('bja_motivo_baja')->nullable();
            
            $table->foreignId('id_producto')
                ->nullable()
                ->constrained('product')
                ->cascadeOnUpdate()
                ->nullOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decline');
    }
};
