<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('checklist_auditorias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('auditoria_id')->constrained('auditorias')->onDelete('cascade');
            $table->foreignId('requisito_iso_id')->constrained('requisito_isos')->onDelete('cascade');
            $table->enum('estado_cumplimiento', [
                'Conforme',
                'No Conforme Mayor',
                'No Conforme Menor',
                'Oportunidad de Mejora',
                'No Aplicable'
            ])->default('Conforme');
            $table->text('observaciones')->nullable();
            $table->text('justificacion')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('checklist_auditorias');
    }
};