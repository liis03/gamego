<?php

namespace App\Controllers;

use App\Models\Auth_model;

class Auth extends BaseController
{
    protected $usuariosModel;

    public function __construct()
    {
        $this->usuariosModel =  new Auth_model();
    }

    public function index()
    {
        $session = session();
        var_dump ($session->get('usuario'));
        return view('login');

    }

    public function registrar()
    {

        if ($this->request->getServer('REQUEST_METHOD') === 'POST') {
            $nombre = $this->request->getPost('nombre');
            $apellido = $this->request->getPost('apellido');
            $email = $this->request->getPost('email');
            $contrasena = $this->request->getPost('contrasena');

            if (!empty($nombre) && !empty($apellido) && !empty($email) && !empty($contrasena)) {
                // Registro
                if (!$this->usuariosModel->checkUser($email, $contrasena)) {
                    $this->usuariosModel->register($nombre, $apellido, $email, $contrasena);
                    // Registro correcto
                    return redirect()->to(base_url('/'))->with('mensaje', 'Registro correcto');
                } else {
                    // Usuario ya registrado
                    return redirect()->to(base_url('registro'))->with('error', 'El usuario ya está registrado');
                }
            } else {
                // Campos incompletos
                return redirect()->to(base_url('registro'))->with('error', 'Por favor, complete todos los campos');
            }
        }
    }

    public function login()
    {

        if ($this->request->getServer('REQUEST_METHOD') === 'POST') {
            $email = $this->request->getPost('email');
            $contrasena = $this->request->getPost('contrasena');
           
            // echo "email: $email";
            // echo "contrasena: $contrasena";
            var_dump($email, $contrasena);
            if (!empty($email) && !empty($contrasena)) {
                if ($this->usuariosModel->checkUser($email, $contrasena)) {
                    
                    // echo "checkUser() devolvio true";
                    // Inicio correcto
                    // Guardar en sesion el usuario
                    $session = session();
                    $session->set('usuario', $email);      

                    // Obtener rol de usuario
                    $role = $this->usuariosModel->getUserRole($email);

                    // Guardar rol en sesion
                    $session->set('role',$role);

                    //Redirigir a la pag de inicio 
                    return redirect()->to(base_url('/inicio'));
                    
                   
                } else {
                    // Credenciales incorrectas
                    // echo "credenciales incorrectas";
                    $session = session();
                    return redirect()->to(base_url('/'))->with('error', 'Credenciales incorrectas');
                }
            } else {
                // Campos incompletos
                // echo "completa los campos";
                return redirect()->to(base_url('/'))->with('error', 'Por favor, completa todos campos');
            }
        }
    }

    public function logout()
    {
        // Llamada a la funcion logout de BaseController
        return parent::logout();
    }
}
