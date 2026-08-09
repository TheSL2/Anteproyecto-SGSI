<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('auditorias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('objetivo')->nullable();
            $table->text('alcance')->nullable(); 
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->foreignId('auditor_lider_id')->nullable()->constrained('users')->onDelete('set null');
            $table->enum('estado', [
                'Borrador',
                'Planificada',
                'En Ejecución',
                'En Revisión de Informe',
                'Cerrada'
            ])->default('Borrador');
            $table->text('conclusiones')->nullable();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('auditorias');
    }
};