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
            $table->foreignId('category_child_id')->nullable()->constrained('child_categories')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->integer('regular_price');
            $table->integer('sale_price')->nullable();
            $table->integer('weight');
            $table->string('image')->nullable();
            $table->enum('status' ,['Active', 'Inactive'])->default('Active');
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
