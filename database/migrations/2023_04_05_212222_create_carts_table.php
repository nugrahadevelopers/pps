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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('customer_id')->nullable();
            $table->foreignUuid('item_id');
            $table->integer('qty')->default(0);
            $table->decimal('price', 64, 0)->default(0);
            $table->decimal('discount', 64, 0)->default(0);
            $table->decimal('total', 64, 0)->default(0);
            $table->timestamps();
        });

        Schema::table('carts', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
