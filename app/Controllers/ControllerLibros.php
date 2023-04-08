<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelLibros;
class ControllerLibros extends Controller{


    public function index(){
        $libro = new Libro();
        
        $datos['libros'] = $libro->orderBy('id','ASC')->findAll();
        return view ('libros/listar' , $datos);
    }

}