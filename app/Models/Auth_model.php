<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth_model extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'email', 'contrasena','role','token'];


    public function checkUser($email, $pass)
    {
        $user = $this->where('email', $email)->first();

        // echo "Usuario obtenido de la bdd: "; var_dump($user);

        if ($user && password_verify($pass, $user['contrasena'])) {
            return true;
        }
        // echo "checkUser(): usuario no encontrado o contraseña incorrecta";
        return false;
    }

    public function register($nombre, $apellido, $email, $pass)
    {
        $data = [
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'contrasena' => password_hash($pass, PASSWORD_DEFAULT),
            'role' =>'user'
        ];

        return $this->insert($data);
    }

    // Obtener rol dado un usuario
    public function getUserRole($email)
    {
        // Realiza la consulta para obtener el rol del usuario
        $user = $this->where('email',$email)->first();

        if ($user){
            return $user['role'];
        }
        return false;
    }

    public function getHash($email)
    {
        $user = $this->where('email', $email)->first();

        if ($user) {
            return $user['contrasena'];
        }
        return false;
    }
}

