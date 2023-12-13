<?php

namespace App\Controllers;

use App\Models\Auth_model;

class AdminController extends BaseController
{
    protected $authModel;
    public function __construct()
    {

        // Verificar si el usuario está autenticado
        $session = session();
        if (!$session->has('usuario')) {
            // Usuario no autenticado, redirigir a inicio de sesión
            return redirect()->to(base_url('/'))->with('error', 'Debe iniciar sesión primero');
        }
        // cargar modelo auth_model
        $this->authModel = new Auth_model();

        // Verificar si el usuario tiene permisos como admin
        $isAdmin = $this->authModel->getUserRole(session('usuario')) === 'admin';

        // Si el usuario no es admin, redirigir a users
        if (!$isAdmin) {
            return redirect()->to(base_url('inicio'))->with('error', 'No tienes permisos de administrador');
        }
    }
    public function dashboard()
    {
        return view('admin/admin_dashboard');
    }
}
