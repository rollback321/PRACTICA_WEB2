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
                
             //   $this->session->set_userdata($result);
                echo "1";
            } else {
                echo '<b style="color: red;">Nombre de Usuario</b> y/o <b style="color: red;">Contraseña</b> Incorrectos';
            }
                      
    }
}
