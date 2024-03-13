<?php
namespace App\Models;

use CodeIgniter\Model;

class Contacto extends Model{

protected $table ='contacto';
//campos que se permiten para guardar
protected $allowedFields = [
'nombre', 
'correo',  
'asunto', 
'mensaje'];
}
 
