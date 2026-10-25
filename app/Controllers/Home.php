<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function home(): string
    {
        $data = [
            'title'   => 'Actividad CodeIgniter 4',
            'message' => 'Bienvenido a la ruta /home, renderizada con el View Renderer de CodeIgniter 4.',
        ];

        return view('home', $data);
    }
}
