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
        Schema::create('category_item', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->tinyInteger('is_active')->default(1);
            $table->foreignUuid('created_by')->nullable();
            $table->timestamps();
        });

        Schema::table('category_item', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_item');
    }
};
