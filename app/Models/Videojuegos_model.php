<?php

namespace App\Models;

use CodeIgniter\Model;

class Videojuegos_model extends Model
{
    // crear tabla
    protected $table = 'videojuegos';
    protected $primary_key = 'id_videojuego';

    protected $allowedFields = ['titulo','descripcion','precio','activo'];

    public function obtenerTodos($where = [])
    {
        // Array de condiciones where []
        if (!empty($where)){
            return $this->where($where)->findAll();
        } else {
            return $this->findAll();
        }
    }
}
