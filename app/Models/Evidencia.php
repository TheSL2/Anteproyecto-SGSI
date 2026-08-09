<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChecklistAuditoria;
use App\Models\Hallazgo;
use App\Models\User;

class Evidencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'checklist_id',
        'hallazgo_id',
        'nombre_archivo',
        'ruta_almacenamiento',
        'hash_sha256',
        'subido_por',
    ];

    public function checklist()
    {
        return $this->belongsTo(ChecklistAuditoria::class, 'checklist_id');
    }

    public function hallazgo()
    {
        return $this->belongsTo(Hallazgo::class, 'hallazgo_id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'subido_por');
    }
}