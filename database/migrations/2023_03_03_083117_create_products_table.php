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
            $table->string('product_slug')->unique();
            $table->integer('category_id')->nullable();
            $table->string('product_thumbnail')->nullable();
            $table->string('product_name')->nullable();
            $table->integer('product_price')->nullable();
            $table->integer('days3rental')->nullable();
            $table->integer('days5rental')->nullable();
            $table->integer('days7rental')->nullable();
            $table->boolean('size_s')->default(false);
            $table->boolean('size_xs')->default(false);
            $table->boolean('size_xxs')->default(false);
            $table->boolean('size_m')->default(false);
            $table->boolean('size_l')->default(false);
            $table->boolean('size_xl')->default(false);
            $table->boolean('size_xxl')->default(false);
            $table->boolean('size_xxxl')->default(false);
            $table->text('product_descriptions')->nullable();
            $table->string('size_chart')->nullable();
            $table->string('status')->nullable();
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
