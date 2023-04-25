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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');   
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('phone')->nullable();
            $table->string('email')->nullable(); 
            $table->string('address_type')->nullable();
            $table->text('street_address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('city')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
