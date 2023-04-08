<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ModelUser extends Model{
    protected $table      = 'usuarios';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';


    public function verificar_usuario($data){

      $usuario = $this->db->table('usuarios');
      $usuario->where($data);
       return $usuario->get()->getResultArray();
    }

}

