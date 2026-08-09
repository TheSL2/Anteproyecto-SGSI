<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequisitoIso extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria',
        'codigo',
        'descripcion',
        'aplicable',
        'orientacion_implementacion'
    ];

    public function checklists()
    {
        return $this->hasMany(ChecklistAuditoria::class, 'requisito_iso_id');
    }
}