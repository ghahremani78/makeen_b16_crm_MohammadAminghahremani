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
        Schema::create('lable_user', function (Blueprint $table) {
            $table->unsignedBigInteger('lable_id');
            $table->unsignedBigInteger('user_id');
           $table->unique(['lable_id','user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lable_user');
    }
};
