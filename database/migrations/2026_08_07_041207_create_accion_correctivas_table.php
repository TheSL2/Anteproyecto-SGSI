<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('acciones_correctivas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hallazgo_id')->constrained('hallazgos')->onDelete('cascade');
            $table->text('causa_raiz')->nullable();
            $table->text('descripcion_accion');
            $table->foreignId('responsable_id')->constrained('users')->onDelete('cascade');
            $table->date('fecha_limite');
            $table->enum('estado', ['Pendiente', 'En Proceso', 'Verificada', 'Rechazada', 'Vencida'])->default('Pendiente');
            $table->foreignId('evidencia_cierre_id')->nullable()->constrained('evidencias')->onDelete('set null');
            $table->foreignId('verificado_por')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('acciones_correctivas');
    }
};