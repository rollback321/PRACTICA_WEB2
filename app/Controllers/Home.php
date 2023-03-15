<?php

namespace App\Controllers;
use App\Models\ModelUser;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function login(){
            $nombre = $this->request->getPost("name");
            $password = $this->request->getPost("pass");

            
            $data = [
                'usuario' => $nombre,
                'password' => $password
            ];

            $usuario = new ModelUser();
            $result = $usuario->verificar_usuario($data);

            if(count($result) > 0 ){
                echo 'Login Correcto';
            } else {
                echo "NO EXISTEN DATOS";
            }
             
    }
}
