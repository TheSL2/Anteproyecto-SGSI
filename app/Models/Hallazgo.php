<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ChecklistAuditoria;
use App\Models\AccionCorrectiva;

class Hallazgo extends Model
{
    use HasFactory;

    protected $fillable = [
        'checklist_id',
        'tipo_hallazgo',
        'clausula_o_control',
        'descripcion',
        'estado',
        'fecha_notificacion',
        'estado_notificacion',
    ];

    public function checklist()
    {
        return $this->belongsTo(ChecklistAuditoria::class, 'checklist_id');
    }

    public function accionesCorrectivas()
    {
        return $this->hasMany(AccionCorrectiva::class, 'hallazgo_id');
    }
}