<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hallazgo;
use App\Models\User;
use App\Models\Evidencia;

class AccionCorrectiva extends Model
{
    use HasFactory;

    protected $table = 'acciones_correctivas';

    protected $fillable = [
        'hallazgo_id',
        'causa_raiz',
        'descripcion_accion',
        'responsable_id',
        'fecha_limite',
        'estado',
        'evidencia_cierre_id',
        'verificado_por',
    ];

    public function hallazgo()
    {
        return $this->belongsTo(Hallazgo::class, 'hallazgo_id');
    }

    public function responsable()
    {
        return $this->belongsTo(User::class, 'responsable_id');
    }

    public function evidenciaCierre()
    {
        return $this->belongsTo(Evidencia::class, 'evidencia_cierre_id');
    }

    public function verificadoPor()
    {
        return $this->belongsTo(User::class, 'verificado_por');
    }
}