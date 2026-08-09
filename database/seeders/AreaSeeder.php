<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    public function run(): void
    {
        Area::create([
            'nombre' => 'Seguridad TI', 
            'descripcion' => 'Protege los sistemas, redes y datos de la organización contra accesos no autorizados, ciberataques y vulneraciones'
        ]);
        Area::create([
            'nombre' => 'Recursos Humanos', 
            'descripcion' => 'Encargada de gestionar todo el ciclo de vida del personal en la organización para alinear el talento con los objetivos empresariales'
        ]);
        Area::create([
            'nombre' => 'Desarrollo', 
            'descripcion' => 'Area responsable de crear diseñar, programar, probar y mantener software y aplicaciones informáticas para resolver necesidades específicas'
        ]);
        Area::create([
            'nombre' => 'Operación', 
            'descripcion' => 'Encargada de la gestión y supervisión diaria de la infraestructura tecnológica para asegurar que los servicios de TI funcionen de manera eficiente'
        ]);
        Area::create([
            'nombre' => 'Administración', 
            'descripcion' => 'Encargado de asegurar el buen funcionamiento de la organización, gestionando recursos financieros, humanos y materiales para alcanzar los objetivos estratégicos'
        ]);
    }
}