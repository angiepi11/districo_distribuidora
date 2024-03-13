<?php
namespace App\Models;

use CodeIgniter\Model;

class metodoscomun extends Model
{
    protected $table = 'metodos_comun'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'Id'; // Clave primaria de la tabla

    protected $allowedFields = [
        'nombre_completo',
        'numero_tarjeta',
        'fecha_expiracion',
        'cvv',
        'metodo_pago',

    ];

    // Otros ajustes y configuraciones del modelo si es necesario
}
