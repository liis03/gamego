<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductosModel;

class Productos extends BaseController
{
    protected $productos;

    public function __construct()
    {
        $this->productos = new ProductosModel();
    }

    public function index($activo = 1)
    {
        // Buscar todos los registros activos
        $productos = $this->productos->where('activo', $activo)->findAll();
        $data = ['titulo' => 'Productos', 'datos' => $productos];

        echo view('templates/admin/header');
        echo view('admin/productos/productos', $data);
        echo view('templates/admin/footer');
    }

    public function eliminados($activo = 0)
    {
        // Buscar todos los registros activos
        $productos = $this->productos->where('activo', $activo)->findAll();
        $data = ['titulo' => 'Productos', 'datos' => $productos];

        echo view('templates/admin/header');
        echo view('admin/productos/eliminados', $data);
        echo view('templates/admin/footer');
    }
    
    public function nuevo()
    {
        $data = ['titulo' => 'Agregar producto'];

        echo view('templates/admin/header');
        echo view('admin/productos/nuevo', $data);
        echo view('templates/admin/footer');
    }

    public function insertar()
    {
        $this->productos->save([
            'codigo' => $this->request->getPost('codigo'),
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'existencias' => $this->request->getPost('existencias'),
            'stock_minimo' => $this->request->getPost('stock_minimo'),
            'precio' => $this->request->getPost('precio'),
            'id_categoria' => $this->request->getPost('id_categoria')
        ]);

        return redirect()->to(base_url() . 'productos');
    }

    public function editar($id)
    {
        // Busca el primer registro que encuentre con ese id
        $producto = $this->productos->where('id', $id)->first();
        $data = ['titulo' => 'Editar producto', 'datos' => $producto];

        echo view('templates/admin/header');
        echo view('admin/productos/editar', $data);
        echo view('templates/admin/footer');
    }

    public function actualizar()
    {
        // Recoger el id de hidden y actualiza nombre y existencias de ese id
        $this->productos->update(
            $this->request->getPost('id'),
            [
                'codigo' => $this->request->getPost('codigo'),
                'nombre' => $this->request->getPost('nombre'),
                'descripcion' => $this->request->getPost('descripcion'),
                'existencias' => $this->request->getPost('existencias'),
                'stock_minimo' => $this->request->getPost('stock_minimo'),
                'precio' => $this->request->getPost('precio'),
                'id_categoria' => $this->request->getPost('id_categoria')
            ]
        );

        return redirect()->to(base_url() . 'productos');
    }

    public function eliminar($id)
    {
        // Recoger el id de hidden y pasa el activo a 0
        $this->productos->update($id, ['activo' => 0]);
        return redirect()->to(base_url() . 'productos');
    }

    public function reingresar($id)
    {
        // Recoger el id de hidden y pasa el activo a 0
        $this->productos->update($id, ['activo' => 1]);
        return redirect()->to(base_url() . 'productos');
    }
}
