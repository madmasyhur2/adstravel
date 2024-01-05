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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('travel_id');
            $table->string('name');
            $table->string('phone_number');
            $table->integer('quantity'); 
            $table->string('city');
            $table->integer('total_price');
            $table->enum('payment_status', ['SUCCESS','PROCESS', 'FAILURE'])->default('PROCESS');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('travel_id')->references('id')->on('travel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
