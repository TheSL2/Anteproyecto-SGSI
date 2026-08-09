<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'objetivo',
        'alcance',
        'fecha_inicio',
        'fecha_fin',
        'auditor_lider_id',
        'estado',
        'conclusiones'
    ];

    public function auditorLider()
    {
        return $this->belongsTo(User::class, 'auditor_lider_id');
    }

    public function areas()
    {
        return $this->belongsToMany(Area::class, 'auditoria_areas');
    }
    
    public function equipoAuditor()
    {
        return $this->belongsToMany(User::class, 'auditoria_users', 'auditoria_id', 'user_id');
    }

    public function checklists()
    {
        return $this->hasMany(ChecklistAuditoria::class, 'auditoria_id');
    }
}