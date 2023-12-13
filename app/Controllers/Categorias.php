<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriasModel;

class Categorias extends BaseController
{
    protected $categorias;

    public function __construct()
    {
        $this->categorias = new CategoriasModel();
    }

    public function index($activo = 1)
    {
        // Buscar todos los registros activos
        $categorias = $this->categorias->where('activo', $activo)->findAll();
        $data = ['titulo' => 'Categorias', 'datos' => $categorias];

        echo view('templates/admin/header');
        echo view('admin/categorias/categorias', $data);
        echo view('templates/admin/footer');
    }

    public function eliminados($activo = 0)
    {
        // Buscar todos los registros activos
        $categorias = $this->categorias->where('activo', $activo)->findAll();
        $data = ['titulo' => 'Productos', 'datos' => $categorias];

        echo view('templates/admin/header');
        echo view('admin/categorias/eliminados', $data);
        echo view('templates/admin/footer');
    }
    
    public function nuevo()
    {
        $data = ['titulo' => 'Agregar categoria'];

        echo view('templates/admin/header');
        echo view('admin/categorias/nuevo', $data);
        echo view('templates/admin/footer');
    }

    public function insertar()
    {
        $this->categorias->save([
            'nombre' => $this->request->getPost('nombre')
        ]);

        return redirect()->to(base_url() . 'categorias');
    }

    public function editar($id)
    {
        // Busca el primer registro que encuentre con ese id
        $categoria = $this->categorias->where('id', $id)->first();
        $data = ['titulo' => 'Editar categoria', 'datos' => $categoria];

        echo view('templates/admin/header');
        echo view('admin/categorias/editar', $data);
        echo view('templates/admin/footer');
    }

    public function actualizar()
    {
        // Recoger el id de hidden y actualiza nombre y existencias de ese id
        $this->categorias->update(
            $this->request->getPost('id'),
            [
                'nombre' => $this->request->getPost('nombre')
            ]
        );

        return redirect()->to(base_url() . 'categorias');
    }

    public function eliminar($id)
    {
        // Recoger el id de hidden y pasa el activo a 0
        $this->categorias->update($id, ['activo' => 0]);
        return redirect()->to(base_url() . 'categorias');
    }

    public function reingresar($id)
    {
        // Recoger el id de hidden y pasa el activo a 0
        $this->categorias->update($id, ['activo' => 1]);
        return redirect()->to(base_url() . 'categorias');
    }
}
