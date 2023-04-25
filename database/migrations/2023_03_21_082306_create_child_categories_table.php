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
        Schema::create('child_categories', function (Blueprint $table) {
            $table->id();
            $table->string('childcategoryName');
            $table->string('slug');
            $table->foreignId('category_id')->unsigned();
            $table->foreignId('subcategory_id')->unsigned();
            $table->string('text_desc');
            $table->string('image')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->foreign('category_id')->on('categories')->references('id')->cascadeOnDelete();
            $table->foreign('subcategory_id')->on('sub_categories')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_categories');
    }
};
