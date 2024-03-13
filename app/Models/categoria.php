<?php
namespace App\Models;

use CodeIgniter\Model;

class categoria extends Model{

    protected $table = 'categoria'; 
    protected $primaryKey = 'id';
    protected $allowedFields =['nombre']; // Agrega 'imagen' si la estás almacenando en la base de datos

}
