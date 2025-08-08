<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema ::create('products', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->longText('description');
            $table->float('price');
            $table->integer('weight');
            $table->string('picture');
            $table->integer('stock_available');
            $table->foreignId('categorie_id');
            $table->boolean('available');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
