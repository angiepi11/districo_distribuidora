<?php

namespace App\Models;

use CodeIgniter\Model;

class producto extends Model 
{
    protected $table = 'productos'; // Reemplaza 'nombre_de_tu_tabla' con el nombre real de tu tabla
    protected $primaryKey = 'Id';
    protected $allowedFields = ['nombre', 'precio_actual', 'precio_anterior', 'descripcion', 'categoria', 'imagen']; // Agrega 'imagen' si la estás almacenando en la base de datos

}
  