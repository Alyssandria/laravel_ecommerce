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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->unique()->constrained()->cascadeOnDelete();
            $table->integer('product_id')->unique();
            $table->integer('quantity');
            $table->timestamps();
        });
    }
};
