<?php
namespace App\Models;

use CodeIgniter\Model;

class Bancolombia extends Model
{
    protected $table = 'bancolombia'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'Id'; // Clave primaria de la tabla

    protected $allowedFields = [
        'nombre_completo',
        'numero_cuenta',
        'pin',
    ];

    // Otros ajustes y configuraciones del modelo si es necesario
}

