<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('templates/admin/header');
        echo view('admin/contenido');
        echo view('templates/admin/footer');
    }
}
