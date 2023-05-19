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
        Schema::create('model_nos', function (Blueprint $table) {
            $table->id();
            // $table->string('id_product');
            $table->foreignId('product_id')
                ->constrained(table: 'items')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string('serial_no');
            $table->string('prod_date');
            $table->string('warranty_start');
            $table->string('warranty_duration');
            $table->boolean('used');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_nos');
    }
};
