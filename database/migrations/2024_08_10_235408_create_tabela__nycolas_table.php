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
        Schema::create('tabela__nycolas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('telefone', 14);
            $table->string('email', 50);
            $table->string('motivo_contato');
            $table->string('mensagem');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabela__nycolas');
    }
};
