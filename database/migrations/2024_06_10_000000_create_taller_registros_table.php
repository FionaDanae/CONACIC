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
        Schema::create('taller_registros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->unsignedInteger('taller_id');
            $table->string('nombre');
            $table->string('email');
            $table->string('matricula');
            $table->unsignedInteger('registro_id')->unique(); // ID único para cada registro
            $table->timestamps();
            
            // Aseguramos que un usuario solo pueda registrarse una vez por taller
            $table->unique(['user_id', 'taller_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taller_registros');
    }
};