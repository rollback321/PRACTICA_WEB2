<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class C_Libros extends Controller{

    public function  index (){
 
        echo view("plantillas/header");
        echo view("plantillas/footer");
    
    }


}