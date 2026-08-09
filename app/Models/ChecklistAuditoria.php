<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RequisitoIso;
use App\Models\Auditoria;
use App\Models\Hallazgo;

class ChecklistAuditoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'auditoria_id',
        'requisito_iso_id',
        'estado_cumplimiento',
        'observaciones',
        'justificacion'
    ];

    public function requisitoIso()
    {
        return $this->belongsTo(RequisitoIso::class, 'requisito_iso_id');
    }

    public function auditoria()
    {
        return $this->belongsTo(Auditoria::class, 'auditoria_id');
    }

    public function hallazgos()
    {
        return $this->hasMany(Hallazgo::class, 'checklist_id');
    }
}