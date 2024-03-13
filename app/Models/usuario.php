<?php
namespace App\Models;

use CodeIgniter\Model;

class usuario extends Model{

protected $table ='registrarse'; 
protected $primaryKey = 'Id';
//campos que se permiten para guardar
protected $allowedFields=[
"nombre_apellido",
"correo",
"contraseña"];
}

