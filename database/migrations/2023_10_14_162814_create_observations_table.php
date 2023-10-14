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
        Schema::create('observations', function (Blueprint $table) {
            $table->id();
            $table->string('message', 300);
            $table->foreignId('category')->nullable();
            $table->foreignId('owner')->nullable();
            $table->foreignId('machine')->nullable();
            $table->timestamps(); #Created at, modified at

            $table->foreign('machine')->references('id')->on('computers')->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('owner')->references('id')->on('users')->nullOnDelete()->cascadeOnUpdate();
            $table->foreign('category')->references('id')->on('categories')->nullOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observations');
    }
};
