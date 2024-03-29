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
        Schema::create('interaccion_', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_perro_interesado')->constrained('perro');
            $table->foreignId('id_perro_candidato')->constrained('perro');
            $table->integer('rechazado')->default(0);
            $table->integer('aprobado')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interaccion_');
    }
};
