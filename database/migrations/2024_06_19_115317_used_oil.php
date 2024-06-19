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
        Schema::create('used_oils', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->integer('price')->nullable();
            $table->unsignedBigInteger('seller_id');
            $table->string('quality')->nullable();
            $table->string('status');
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
