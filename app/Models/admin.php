<?php

namespace App\Models;

use CodeIgniter\Model;

class admin extends Model
{
    protected $table = 'login_admi'; 

    protected $primaryKey = 'id'; 
    protected $allowedFields = ['usuario', 'contraseña', 'nombre_completo']; 
}
