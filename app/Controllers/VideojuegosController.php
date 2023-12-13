<?php

namespace App\Controllers;

use App\Models\Videojuegos_model;

class VideojuegosController extends BaseController
{

    // Categoria seleccionada por el usuario
    public function index()
    {
        //usuario autenticado?
    
        $session = session();
        var_dump ($session->get('usuario'));

        //   Obtener datos de la bdd utilizando el modelo 
        $videojuegosModel = new Videojuegos_model();

        // Obtener todos los videojuegos
        $data['videojuegos'] = $videojuegosModel->obtenerTodos();

        // Obtener solo los videojuegos con condicion activo = 1
        $data['videojuegos'] = $videojuegosModel->obtenerTodos(['activo' =>1]);

        // Cargar vista

        return view('videojuegos\index', $data);
    }
}
