<?php

namespace App\Controllers;

use App\Models\Carrito_model;

class CarritoController extends BaseController 
{
    public function agregarAlCarrito($productoId){

        // objeto de carritoModel
        $carritoModel = new Carrito_model();

        // Obtener el usuario actual en sesion
        $usuarioId = session()->get('usuario');

        // Obtener cantidad del carrito, por defecto ponerlo a 1
        $cantidad = $this->request->getPost('cantidad') ?? 1;

        // Agregar producto al carrito
        $data = [
            'id_usuario'  => $usuarioId,
            'producto_id' => $productoId,
            'tipo_producto' => $this->request->getPost('tipo_producto'),
            'cantidad' => $cantidad,

        ];

        // llamar a la funcion agregarAlCarrito
        $carritoModel->agregarAlCarrito($data);
        
        // Vista
        return redirect()->to('/carrito');
    }

    // Eliminamos el producto que pasamos por parametro 
    public function eliminarDelCarrito($productoID)
    {
        $usuarioId = session()->get('usuario');

        $carritoModel = new Carrito_model();
        $carritoModel->eliminarDelCarrito($productoID,$usuarioId);

        return redirect()->to('/carrito');
    }


    public function actualizarTotales($usuarioId)
    {
        $carritoModel = new Carrito_model();
        $carritoModel->actualizarTotales($usuarioId);

        // Vista
        return redirect()->to('/carrito');
    }







}