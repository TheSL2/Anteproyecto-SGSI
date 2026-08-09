<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hallazgos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('checklist_id')->constrained('checklist_auditorias')->onDelete('cascade');
            $table->enum('tipo_hallazgo', ['No Conforme Mayor', 'No Conforme Menor', 'Oportunidad de Mejora', 'Observacion']);
            $table->string('clausula_o_control', 100);
            $table->text('descripcion');
            $table->enum('estado', ['Abierto', 'En Proceso', 'Cerrado'])->default('Abierto');
            $table->timestamp('fecha_notificacion')->nullable();
            $table->enum('estado_notificacion', ['Pendiente', 'Notificado', 'Aceptado'])->default('Pendiente');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hallazgos');
    }
};