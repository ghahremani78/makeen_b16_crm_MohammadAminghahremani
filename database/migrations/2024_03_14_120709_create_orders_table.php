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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('nameproduct');
            $table->string('selectcolor');
            $table->integer('num');
            $table->string('paymenttype');
            $table->text('location');
            $table->integer('codeposti');
            $table->text('transferee');
            $table->string('customername');
            $table->bigInteger('mobile');
            $table->bigInteger('homephonenumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
