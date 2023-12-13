<?php
namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/admin_home');
    }
    
    public function dashboard()
    {
        //Dashboard de administrador
        return view('admin/admin_dashboard');
    }
}
