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
        Schema::create('product', function (Blueprint $table) {
            $table->id();

            $table->string('prd_nombre')->nullable();
            $table->string('prd_codigo_barras')->nullable();
            $table->double('prd_precio_costo')->nullable();
            $table->double('prd_precio_venta')->nullable();
            $table->date('prd_caducidad')->nullable();
            $table->double('prd_cantidad')->nullable();
            $table->string('prd_folio_factura')->nullable();
            $table->double('prd_descuento')->nullable();

            $table->foreignId('id_categoria')
                ->nullable()
                ->constrained('category')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('id_proveedor')
                ->nullable()
                ->constrained('provider')
                ->cascadeOnUpdate()
                ->nullOnDelete();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
