<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'rol',
        'area_id',
        'activo',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_secret',
        'two_factor_recovery_codes',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'activo' => 'boolean',
            'two_factor_confirmed_at' => 'datetime',
        ];
    }

    public function tieneConflictoDeInteres(int $areaEvaluadaId): bool
    {
        return $this->area_id !== null && $this->area_id === $areaEvaluadaId;
    }

    public function tieneDosFactorActivo(): bool
    {
        return ! empty($this->two_factor_secret) && ! is_null($this->two_factor_confirmed_at);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function auditoriasLideradas()
    {
        return $this->hasMany(Auditoria::class, 'auditor_lider_id');
    }

    public function auditoriasComoEquipo()
    {
        return $this->belongsToMany(Auditoria::class, 'auditoria_users');
    }

    public function accionesCorrectivasAsignadas()
    {
        return $this->hasMany(AccionCorrectiva::class, 'responsable_id');
    }

    public function evidenciasSubidas()
    {
        return $this->hasMany(Evidencia::class, 'subido_por');
    }
}