<?php 
namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model{
    protected $table      = 'usuario';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';


    public function verificar_usuario($data){
        $usuario = $this->db->table('tb_usuarios');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }

}

