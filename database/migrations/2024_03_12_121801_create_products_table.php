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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('path_image');
            $table->string('productname');
            $table->bigInteger('price');
            $table->string('memory');
            $table->string('operatingsystem');
            $table->string('color');
            $table->foreignId('brand_id')->constrained()->restrictOnDelete()->restrictOnUpdate();
            //$table->unsignedBigInteger('warranty_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
