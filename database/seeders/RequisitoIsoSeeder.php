<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RequisitoIso;

class RequisitoIsoSeeder extends Seeder
{
    public function run(): void
    {
        $requisitos = [
            // ==========================================
            // CLÁUSULAS (Norma ISO 27001:2022)
            // ==========================================
            [
                'categoria' => 'Clausula',
                'codigo' => '4.1',
                'descripcion' => 'Comprensión de la organización y de su contexto.',
                'orientacion_implementacion' => 'Determinar las cuestiones externas e internas relevantes para el propósito del SGSI y que afectan a su capacidad para lograr los resultados previstos.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '4.2',
                'descripcion' => 'Comprensión de las necesidades y expectativas de las partes interesadas.',
                'orientacion_implementacion' => 'Identificar las partes interesadas relevantes para el SGSI y sus requisitos legales, reglamentarios y contractuales.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '4.3',
                'descripcion' => 'Determinación del alcance del sistema de gestión de la seguridad de la información.',
                'orientacion_implementacion' => 'Definir los límites y la aplicabilidad del SGSI considerando el contexto, requisitos de partes interesadas e interfaces organizacionales.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '4.4',
                'descripcion' => 'Sistema de gestión de la seguridad de la información.',
                'orientacion_implementacion' => 'Establecer, implementar, mantener y mejorar continuamente el SGSI de acuerdo con los requisitos de la norma.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '5.1',
                'descripcion' => 'Liderazgo y compromiso.',
                'orientacion_implementacion' => 'La alta dirección debe demostrar liderazgo garantizando la integración de la seguridad en los procesos del negocio y asignando recursos adecuados.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '5.2',
                'descripcion' => 'Política.',
                'orientacion_implementacion' => 'Establecer una política de seguridad alineada al propósito de la organización, que incluya compromisos de mejora continua y cumplimiento de requisitos.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '5.3',
                'descripcion' => 'Roles, responsabilidades y autoridades en la organización.',
                'orientacion_implementacion' => 'Asignar y comunicar las responsabilidades y autoridades para los roles relevantes dentro del SGSI.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '6.1',
                'descripcion' => 'Acciones para abordar riesgos y oportunidades.',
                'orientacion_implementacion' => 'Definir y aplicar un proceso de apreciación y tratamiento de riesgos de seguridad de la información y emitir la Declaración de Aplicabilidad (SoA).'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '6.2',
                'descripcion' => 'Objetivos de seguridad de la información y planificación para alcanzarlos.',
                'orientacion_implementacion' => 'Establecer objetivos medibles, comunicados y actualizados en niveles y funciones relevantes de la organización.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '7.1',
                'descripcion' => 'Recursos.',
                'orientacion_implementacion' => 'Determinar y proporcionar los recursos necesarios para el establecimiento, implementación, mantenimiento y mejora del SGSI.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '7.2',
                'descripcion' => 'Competencia.',
                'orientacion_implementacion' => 'Asegurar que las personas que realizan trabajos bajo el control de la organización sean competentes con base en educación, formación o experiencia.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '7.3',
                'descripcion' => 'Toma de conciencia.',
                'orientacion_implementacion' => 'Garantizar que el personal esté consciente de la política de seguridad, su contribución a la eficacia del SGSI y las implicaciones del incumplimiento.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '7.4',
                'descripcion' => 'Comunicación.',
                'orientacion_implementacion' => 'Determinar las necesidades de comunicación interna y externa relevantes para el SGSI (qué, cuándo, a quién y cómo comunicar).'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '7.5',
                'descripcion' => 'Información documentada.',
                'orientacion_implementacion' => 'Controlar la creación, actualización, protección y distribución de la información documentada requerida por la norma y el SGSI.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '8.1',
                'descripcion' => 'Planificación y control operacional.',
                'orientacion_implementacion' => 'Planificar, implementar y controlar los procesos necesarios para cumplir los requisitos de seguridad y ejecutar los planes de tratamiento de riesgos.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '8.2',
                'descripcion' => 'Evaluación de riesgos de seguridad de la información.',
                'orientacion_implementacion' => 'Realizar evaluaciones de riesgos a intervalos planificados o cuando se propongan cambios significativos.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '8.3',
                'descripcion' => 'Tratamiento de riesgos de seguridad de la información.',
                'orientacion_implementacion' => 'Implementar el plan de tratamiento de riesgos y conservar información documentada sobre los resultados.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '9.1',
                'descripcion' => 'Seguimiento, medición, análisis y evaluación.',
                'orientacion_implementacion' => 'Monitorear y evaluar el desempeño de la seguridad de la información y la eficacia del SGSI.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '9.2',
                'descripcion' => 'Auditoría interna.',
                'orientacion_implementacion' => 'Llevar a cabo auditorías internas a intervalos planificados para proporcionar información sobre el estado de cumplimiento del SGSI.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '9.3',
                'descripcion' => 'Revisión por la dirección.',
                'orientacion_implementacion' => 'La alta dirección debe revisar el SGSI a intervalos planificados para asegurarse de su conveniencia, adecuación y eficacia continuas.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '10.1',
                'descripcion' => 'Mejora continua.',
                'orientacion_implementacion' => 'Mejorar continuamente la conveniencia, adecuación y eficacia del SGSI.'
            ],
            [
                'categoria' => 'Clausula',
                'codigo' => '10.2',
                'descripcion' => 'No conformidad y acción correctiva.',
                'orientacion_implementacion' => 'Reaccionar ante no conformidades, evaluar la necesidad de eliminar sus causas y verificar la eficacia de las acciones tomadas.'
            ],

            // ==========================================
            // A.5 CONTROLES ORGANIZACIONALES (37 Controles)
            // ==========================================
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.1',
                'descripcion' => 'Políticas para la seguridad de la información',
                'orientacion_implementacion' => 'Definir, aprobar por la dirección, publicar y comunicar las políticas de seguridad a todo el personal y partes interesadas relevantes.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.2',
                'descripcion' => 'Roles y responsabilidades de seguridad de la información',
                'orientacion_implementacion' => 'Definir y asignar adecuadamente las responsabilidades de seguridad de la información en toda la organización.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.3',
                'descripcion' => 'Segregación de funciones',
                'orientacion_implementacion' => 'Separar las tareas y áreas de responsabilidad para reducir las oportunidades de modificación no autorizada o mal uso de los activos.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.4',
                'descripcion' => 'Responsabilidades de la dirección',
                'orientacion_implementacion' => 'Exigir a la dirección que garantice que el personal aplique la seguridad de acuerdo con las políticas establecidas.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.5',
                'descripcion' => 'Contacto con autoridades',
                'orientacion_implementacion' => 'Mantener contactos adecuados con autoridades legales, reguladoras y organismos pertinentes.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.6',
                'descripcion' => 'Contacto con grupos de interés especial',
                'orientacion_implementacion' => 'Mantener vínculos con foros de seguridad, asociaciones profesionales y grupos especializados en ciberseguridad.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.7',
                'descripcion' => 'Inteligencia sobre amenazas',
                'orientacion_implementacion' => 'Recolectar y analizar información sobre amenazas a la seguridad para tomar acciones preventivas e informar la gestión de riesgos.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.8',
                'descripcion' => 'Seguridad de la información en la gestión de proyectos',
                'orientacion_implementacion' => 'Integrar la seguridad de la información en la metodología de gestión de proyectos de la organización.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.9',
                'descripcion' => 'Inventario de información y otros activos asociados',
                'orientacion_implementacion' => 'Identificar y mantener un inventario actualizado de la información y los activos asociados, definiendo a los propietarios responsables.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.10',
                'descripcion' => 'Uso aceptable de la información y otros activos asociados',
                'orientacion_implementacion' => 'Establecer, documentar e implementar reglas para el uso aceptable de la información y los activos de la organización.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.11',
                'descripcion' => 'Devolución de activos',
                'orientacion_implementacion' => 'Asegurar que el personal y externos devuelvan todos los activos de la organización al terminar su empleo o contrato.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.12',
                'descripcion' => 'Clasificación de la información',
                'orientacion_implementacion' => 'Clasificar la información en función de su valor, requisitos legales, sensibilidad y criticidad para la organización.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.13',
                'descripcion' => 'Etiquetado de la información',
                'orientacion_implementacion' => 'Desarrollar e implementar un conjunto adecuado de procedimientos para el etiquetado de la información según su esquema de clasificación.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.14',
                'descripcion' => 'Transferencia de información',
                'orientacion_implementacion' => 'Contar con procedimientos, canales seguros y acuerdos formalizados para la transferencia de información dentro y fuera de la organización.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.15',
                'descripcion' => 'Control de acceso',
                'orientacion_implementacion' => 'Limitar el acceso a la información y recursos de procesamiento según las reglas de negocio y políticas de control de acceso.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.16',
                'descripcion' => 'Gestión de identidades',
                'orientacion_implementacion' => 'Gestionar el ciclo de vida completo de las identidades (creación, modificación y eliminación de usuarios).'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.17',
                'descripcion' => 'Información de autenticación',
                'orientacion_implementacion' => 'Controlar la asignación y gestión de credenciales y contraseñas mediante un proceso formal de gestión.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.18',
                'descripcion' => 'Derechos de acceso',
                'orientacion_implementacion' => 'Asignar, revisar y revocar los derechos de acceso a información y sistemas basándose en el principio de mínimo privilegio.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.19',
                'descripcion' => 'Seguridad de la información en las relaciones con proveedores',
                'orientacion_implementacion' => 'Establecer y evaluar requisitos de seguridad para mitigar los riesgos asociados con el acceso de proveedores a los activos.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.20',
                'descripcion' => 'Seguridad de la información en acuerdos con proveedores',
                'orientacion_implementacion' => 'Incluir cláusulas contractuales de seguridad explícitas en los acuerdos con cada proveedor.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.21',
                'descripcion' => 'Gestión de la seguridad de la información en la cadena de suministro de TIC',
                'orientacion_implementacion' => 'Establecer acuerdos de nivel de servicio y requisitos de ciberseguridad para los productos y servicios tecnológicos contratados.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.22',
                'descripcion' => 'Monitoreo, revisión y gestión de cambios de los servicios de proveedores',
                'orientacion_implementacion' => 'Monitorear periódicamente el desempeño de los servicios de los proveedores y auditar el cumplimiento de los contratos.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.23',
                'descripcion' => 'Seguridad de la información para el uso de servicios en la nube',
                'orientacion_implementacion' => 'Establecer procesos de selección, adquisición, gestión y uso seguro de plataformas y servicios de la nube (SaaS, PaaS, IaaS).'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.24',
                'descripcion' => 'Planificación y preparación para la gestión de incidentes de seguridad de la información',
                'orientacion_implementacion' => 'Diseñar e implementar un plan formal de respuesta a incidentes de ciberseguridad, incluyendo roles y canales de escalamiento.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.25',
                'descripcion' => 'Evaluación y decisión sobre eventos de seguridad de la información',
                'orientacion_implementacion' => 'Evaluar y categorizar las anomalías observadas para determinar si constituyen un incidente de seguridad.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.26',
                'descripcion' => 'Respuesta a incidentes de seguridad de la información',
                'orientacion_implementacion' => 'Ejecutar protocolos de contención, erradicación y recuperación frente a los incidentes detectados.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.27',
                'descripcion' => 'Aprendizaje de incidentes de seguridad de la información',
                'orientacion_implementacion' => 'Documentar las lecciones aprendidas de los incidentes para fortalecer los controles vigentes.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.28',
                'descripcion' => 'Recolección de evidencias',
                'orientacion_implementacion' => 'Establecer procedimientos de forense digital para recolectar y preservar evidencias que puedan ser admisibles en procesos legales o disciplinarios.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.29',
                'descripcion' => 'Seguridad de la información durante interrupciones',
                'orientacion_implementacion' => 'Planificar los requisitos de ciberseguridad necesarios al operar en situaciones de contingencia o desastre.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.30',
                'descripcion' => 'Preparación de TIC para la continuidad del negocio',
                'orientacion_implementacion' => 'Garantizar que los sistemas e infraestructura de TIC cuenten con redundancia y planes de recuperación acordes a los objetivos de continuidad (RTO/RPO).'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.31',
                'descripcion' => 'Requisitos legales, estatutarios, reglamentarios y contractuales',
                'orientacion_implementacion' => 'Identificar y documentar explícitamente la legislación y requisitos aplicables en materia de seguridad e informática.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.32',
                'descripcion' => 'Derechos de propiedad intelectual',
                'orientacion_implementacion' => 'Garantizar la protección de software y materiales protegidos por derechos de autor o licencias.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.33',
                'descripcion' => 'Protección de registros',
                'orientacion_implementacion' => 'Proteger las bitácoras y registros clave de la organización contra alteración, pérdida o acceso no autorizado.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.34',
                'descripcion' => 'Privacidad y protección de la información personal',
                'orientacion_implementacion' => 'Asegurar el cumplimiento de las leyes de protección de datos personales (PII) vigentes.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.35',
                'descripcion' => 'Revisión independiente de la seguridad de la información',
                'orientacion_implementacion' => 'Evaluar el enfoque de la organización para gestionar la seguridad mediante auditorías independientes periódicas.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.36',
                'descripcion' => 'Cumplimiento de políticas, reglas y estándares de seguridad',
                'orientacion_implementacion' => 'Revisar periódicamente si los procesos operativos cumplen con las políticas y normativas internas.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.5.37',
                'descripcion' => 'Procedimientos operativos documentados',
                'orientacion_implementacion' => 'Documentar y poner a disposición del personal autorizado las instrucciones y procedimientos para las actividades de operación tecnológica.'
            ],

            // ==========================================
            // A.6 CONTROLES DE PERSONAS (8 Controles)
            // ==========================================
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.6.1',
                'descripcion' => 'Verificación de antecedentes',
                'orientacion_implementacion' => 'Realizar comprobaciones de antecedentes a todos los candidatos antes de su incorporación, de acuerdo con la legislación local.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.6.2',
                'descripcion' => 'Términos y condiciones de empleo',
                'orientacion_implementacion' => 'Establecer en los contratos laborales la responsabilidad del empleado respecto a la seguridad de la información.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.6.3',
                'descripcion' => 'Concienciación, educación y capacitación en seguridad de la información',
                'orientacion_implementacion' => 'Proporcionar capacitación periódica sobre ciberseguridad y concientización frente a phishing u otras amenazas a todo el personal.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.6.4',
                'descripcion' => 'Proceso disciplinario',
                'orientacion_implementacion' => 'Disponer de un procedimiento formal para aplicar medidas a los colaboradores que hayan cometido violaciones de seguridad.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.6.5',
                'descripcion' => 'Responsabilidades después de la terminación o cambio de empleo',
                'orientacion_implementacion' => 'Definir y comunicar las obligaciones vigentes tras la salida de un empleado o cambio de rol.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.6.6',
                'descripcion' => 'Acuerdos de confidencialidad',
                'orientacion_implementacion' => 'Hacer firmar acuerdos de no divulgación (NDA) formalizados al personal y externos.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.6.7',
                'descripcion' => 'Trabajo remoto',
                'orientacion_implementacion' => 'Implementar políticas, medidas técnicas y de infraestructura para proteger la información procesada fuera de la oficina.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.6.8',
                'descripcion' => 'Reporte de eventos de seguridad de la información',
                'orientacion_implementacion' => 'Proporcionar un mecanismo accesible para que los usuarios notifiquen rápidamente posibles anomalías o incidentes detectados.'
            ],

            // ==========================================
            // A.7 CONTROLES FÍSICOS (14 Controles)
            // ==========================================
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.1',
                'descripcion' => 'Perímetros de seguridad física',
                'orientacion_implementacion' => 'Utilizar barreras físicas y controles perimetrales para resguardar las zonas donde se procesa o almacena información sensitiva.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.2',
                'descripcion' => 'Entrada física',
                'orientacion_implementacion' => 'Proteger las áreas de acceso mediante sistemas de control de entrada (tarjetas, biométricos) y registros de visitantes.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.3',
                'descripcion' => 'Protección de oficinas, salas e instalaciones',
                'orientacion_implementacion' => 'Diseñar y aplicar seguridad física específica para oficinas internas y centros de datos.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.4',
                'descripcion' => 'Monitoreo de la seguridad física',
                'orientacion_implementacion' => 'Instalar sistemas de vigilancia continua (CCTV, sensores) en zonas críticas.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.5',
                'descripcion' => 'Protección contra amenazas físicas y ambientales',
                'orientacion_implementacion' => 'Proteger las instalaciones contra desastres naturales, incendios, inundaciones y fallas del entorno.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.6',
                'descripcion' => 'Trabajo en áreas seguras',
                'orientacion_implementacion' => 'Diseñar y aplicar medidas estrictas de permanencia en áreas clasificadas o de alta seguridad.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.7',
                'descripcion' => 'Escritorio limpio y pantalla limpia',
                'orientacion_implementacion' => 'Adoptar políticas para no dejar documentos físicos confidenciales desatendidos ni pantallas sin bloqueo.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.8',
                'descripcion' => 'Ubicación y protección de equipos',
                'orientacion_implementacion' => 'Ubicación física segura de servidores y equipos para reducir el riesgo de acceso no autorizado o impactos ambientales.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.9',
                'descripcion' => 'Seguridad de los activos fuera de las instalaciones',
                'orientacion_implementacion' => 'Proteger los dispositivos corporativos utilizados fuera de las instalaciones físicas de la empresa.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.10',
                'descripcion' => 'Medios de almacenamiento',
                'orientacion_implementacion' => 'Gestionar de forma segura el almacenamiento en medios removibles o físicos (cifrado, control de acceso).'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.11',
                'descripcion' => 'Servicios de apoyo',
                'orientacion_implementacion' => 'Asegurar que los suministros de energía, climatización y conectividad reciban mantenimiento para prevenir caídas.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.12',
                'descripcion' => 'Seguridad del cableado',
                'orientacion_implementacion' => 'Proteger los cables de red y de energía contra interceptaciones, interferencias o daños físicos.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.13',
                'descripcion' => 'Mantenimiento de equipos',
                'orientacion_implementacion' => 'Realizar mantenimiento periódico a la infraestructura técnica conforme a las especificaciones del fabricante.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.7.14',
                'descripcion' => 'Eliminación o reutilización segura de equipos',
                'orientacion_implementacion' => 'Realizar el borrado seguro o destrucción física de discos y memorias previo a su desecho o reutilización.'
            ],

            // ==========================================
            // A.8 CONTROLES TECNOLÓGICOS (34 Controles)
            // ==========================================
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.1',
                'descripcion' => 'Dispositivos terminales de usuario',
                'orientacion_implementacion' => 'Proteger las estaciones de trabajo, laptops y dispositivos móviles mediante configuraciones seguras y cifrado de disco.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.2',
                'descripcion' => 'Derechos de acceso privilegiado',
                'orientacion_implementacion' => 'Restringir y controlar severamente el uso de cuentas de administrador o con privilegios elevados.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.3',
                'descripcion' => 'Restricción del acceso a la información',
                'orientacion_implementacion' => 'Restringir el acceso a los datos y funciones de las aplicaciones según la política de control de acceso.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.4',
                'descripcion' => 'Acceso al código fuente',
                'orientacion_implementacion' => 'Proteger el código fuente de las aplicaciones e infraestructura contra modificaciones no autorizadas.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.5',
                'descripcion' => 'Autenticación segura',
                'orientacion_implementacion' => 'Implementar tecnologías sólidas de autenticación, exigiendo Múltiple Factor de Autenticación (MFA).'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.6',
                'descripcion' => 'Gestión de capacidad',
                'orientacion_implementacion' => 'Supervisar el uso de recursos tecnológicos (disco, memoria, CPU) para proyectar requerimientos futuros.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.7',
                'descripcion' => 'Protección contra malware',
                'orientacion_implementacion' => 'Desplegar soluciones antivirus/EDR actualizadas en todos los activos de la red.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.8',
                'descripcion' => 'Gestión de vulnerabilidades técnicas',
                'orientacion_implementacion' => 'Escanear periódicamente las aplicaciones y redes para corregir fallos mediante parches de seguridad.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.9',
                'descripcion' => 'Gestión de configuración',
                'orientacion_implementacion' => 'Establecer plantillas de configuración segura (hardening) para servidores, componentes de red y aplicaciones.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.10',
                'descripcion' => 'Eliminación de información',
                'orientacion_implementacion' => 'Garantizar que la información confidencial se borre completamente de los sistemas cuando ya no se requiera.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.11',
                'descripcion' => 'Enmascaramiento de datos',
                'orientacion_implementacion' => 'Utilizar técnicas de seudonimización o anonimización para proteger los datos de carácter sensible.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.12',
                'descripcion' => 'Prevención de fuga de datos',
                'orientacion_implementacion' => 'Aplicar herramientas DLP para detectar y evitar la exfiltración o transferencia no autorizada de información.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.13',
                'descripcion' => 'Respaldo de información',
                'orientacion_implementacion' => 'Realizar y probar periódicamente copias de seguridad de la información documentada y bases de datos.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.14',
                'descripcion' => 'Redundancia de instalaciones de procesamiento de información',
                'orientacion_implementacion' => 'Diseñar arquitecturas con alta disponibilidad para cumplir los requisitos de disponibilidad del negocio.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.15',
                'descripcion' => 'Registro de eventos',
                'orientacion_implementacion' => 'Activar logs en servidores y aplicaciones para registrar actividades de usuarios, errores y eventos de seguridad.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.16',
                'descripcion' => 'Actividades de monitoreo',
                'orientacion_implementacion' => 'Supervisar el comportamiento de las redes e infraestructura para identificar tráfico anómalo mediante herramientas SIEM.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.17',
                'descripcion' => 'Sincronización de relojes',
                'orientacion_implementacion' => 'Sincronizar la hora de todos los servidores y dispositivos utilizando una fuente confiable NTP.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.18',
                'descripcion' => 'Uso de programas utilitarios privilegiados',
                'orientacion_implementacion' => 'Restringir el uso de software de diagnóstico o utilidades que puedan eludir los controles de los sistemas.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.19',
                'descripcion' => 'Instalación de software en sistemas operativos',
                'orientacion_implementacion' => 'Limitar y controlar las instalaciones de programas en los equipos de los usuarios finales.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.20',
                'descripcion' => 'Seguridad de redes',
                'orientacion_implementacion' => 'Gestionar la seguridad de las redes informáticas y de los equipos conectados contra intrusiones.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.21',
                'descripcion' => 'Seguridad de los servicios de red',
                'orientacion_implementacion' => 'Identificar los mecanismos de seguridad y niveles de servicio de los proveedores de telecomunicaciones.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.22',
                'descripcion' => 'Segregación de redes',
                'orientacion_implementacion' => 'Dividir las redes de la organización en segmentos lógicos (VLANs) según la sensibilidad de los sistemas.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.23',
                'descripcion' => 'Filtrado web',
                'orientacion_implementacion' => 'Restringir el acceso desde la red interna a sitios web maliciosos o no autorizados.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.24',
                'descripcion' => 'Uso de criptografía',
                'orientacion_implementacion' => 'Implementar mecanismos de cifrado sólidos para proteger la confidencialidad e integridad de la información en tránsito y en reposo.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.25',
                'descripcion' => 'Ciclo de vida de desarrollo seguro',
                'orientacion_implementacion' => 'Establecer lineamientos de seguridad para el diseño, desarrollo, pruebas y despliegue del software desarrollado.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.26',
                'descripcion' => 'Requisitos de seguridad de aplicaciones',
                'orientacion_implementacion' => 'Especificar y aprobar las características de seguridad al desarrollar o adquirir aplicaciones.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.27',
                'descripcion' => 'Principios de arquitectura e ingeniería segura',
                'orientacion_implementacion' => 'Diseñar los sistemas basándose en principios probados de arquitectura de ciberseguridad.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.28',
                'descripcion' => 'Codificación segura',
                'orientacion_implementacion' => 'Capacitar a los desarrolladores en técnicas de código seguro y realizar análisis estáticos de código (SAST).'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.29',
                'descripcion' => 'Pruebas de seguridad en el desarrollo y aceptación',
                'orientacion_implementacion' => 'Probar exhaustivamente las aplicaciones mediante pruebas de penetración o vulnerabilidad antes de salir a producción.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.30',
                'descripcion' => 'Desarrollo subcontratado',
                'orientacion_implementacion' => 'Supervisar y auditar la seguridad del código o sistemas encargados a terceros.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.31',
                'descripcion' => 'Separación de entornos de desarrollo, prueba y producción',
                'orientacion_implementacion' => 'Mantener separados los ambientes informáticos para evitar alteraciones no autorizadas en producción.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.32',
                'descripcion' => 'Gestión de cambios',
                'orientacion_implementacion' => 'Aplicar un flujo de aprobación formal para las modificaciones realizadas en la infraestructura y aplicaciones.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.33',
                'descripcion' => 'Información de prueba',
                'orientacion_implementacion' => 'Proteger y evitar el uso de datos reales o sensibles en ambientes de prueba.'
            ],
            [
                'categoria' => 'Anexo A',
                'codigo' => 'A.8.34',
                'descripcion' => 'Protección de los sistemas de información durante auditorías',
                'orientacion_implementacion' => 'Planificar y controlar las herramientas de auditoría técnica para minimizar riesgos de interrupción en los servicios.'
            ]
        ];

        foreach ($requisitos as $req) {
            RequisitoIso::updateOrCreate(
                ['codigo' => $req['codigo']],
                [
                    'categoria' => $req['categoria'],
                    'descripcion' => $req['descripcion'],
                    'orientacion_implementacion' => $req['orientacion_implementacion'],
                    'aplicable' => true,
                ]
            );
        }
    }
}