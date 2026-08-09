<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('evidencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('checklist_id')->nullable()->constrained('checklist_auditorias')->onDelete('cascade');
            $table->foreignId('hallazgo_id')->nullable()->constrained('hallazgos')->onDelete('cascade');
            $table->string('nombre_archivo');
            $table->string('ruta_almacenamiento');
            $table->string('hash_sha256');
            $table->foreignId('subido_por')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('evidencias');
    }
};