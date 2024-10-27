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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('loja_id')->constrained()->onDelete('set null');
            $table->foreignId('loja_id')->references('id')->on('listas_tabela')->onDelete('cascade');
            $table->string('Titulo');
            $table->string('Preco');
            $table->string('Descri');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
