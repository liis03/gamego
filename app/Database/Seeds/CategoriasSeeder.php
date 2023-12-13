<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriasSeeder extends Seeder 
{
    public function run()
    {
        $data = [
            'nombre' => 'Videojuegos'
        ];
        $this->db->table('categorias')->insertBatch($data);
    }
}