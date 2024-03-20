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
        Schema::create('buy', function (Blueprint $table) {
            $table->id();
            $table->date('cpr_fecha_compra')->nullable();
            $table->date('cpr_fecha_caducidad')->nullable();
            $table->double('cpr_cantidad')->nullable();
            $table->double('cpr_precio_costo')->nullable();
            $table->double('cpr_precio_venta')->nullable();

            // $table->foreignId('id_proveedor')
            //     ->nullable()
            //     ->constrained('provider')
            //     ->cascadeOnUpdate()
            //     ->nullOnDelete();

                $table->foreignId('id_producto')
                ->nullable()
                ->constrained('product')
                ->cascadeOnUpdate()
                ->nullOnDelete();

                // $table->foreignId('id_categoria')
                // ->nullable()
                // ->constrained('category')
                // ->cascadeOnUpdate()
                // ->nullOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy');
    }
};
