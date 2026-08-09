<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('requisito_isos', function (Blueprint $table) {
            $table->id();
            $table->enum('categoria', ['Clausula', 'Anexo A']);
            $table->string('codigo');
            $table->string('descripcion');
            $table->boolean('aplicable')->default(true);
            $table->text('orientacion_implementacion')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('requisito_isos');
    }
};