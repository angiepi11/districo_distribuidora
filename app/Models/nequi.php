<?php
namespace App\Models;

use CodeIgniter\Model;

class nequi extends Model
{
    protected $table = 'nequi'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'Id'; // Clave primaria de la tabla

    protected $allowedFields = [
        'nombre_completo',
        'numero_telefono',
        'contrasena',
    ];

    // Otros ajustes y configuraciones del modelo si es necesario
}

 