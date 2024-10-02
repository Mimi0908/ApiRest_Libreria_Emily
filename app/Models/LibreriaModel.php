<?php

namespace App\Models;

use CodeIgniter\Model;

class LibreriaModel extends Model
{
    public function listarLibros(){
        $datos=$this->db->query("SELECT*FROM TLibros");
        return $datos->getResult();
    }
    public function insertar($datos){
        $Nombres = $this -> db -> table('TLibros');
        $Nombres -> insert($datos);
        
        return $this-> db-> insertID();  
    }

    public function obtenerNombre($data){
        $Nombres = $this -> db -> table('TLibros');
        $Nombres ->where($data);

        return $Nombres ->get()->getResultArray();
    }


    public function actualiazar($data, $id_nombre){
        $Nombres = $this -> db -> table('TLibros');
        $Nombres->set($data);
        $Nombres->where('id_nombre', $id_nombre);
        return $Nombres->update();
    }

    public function eliminar($data){
        $Nombres = $this -> db -> table('TLibros');
        $Nombres-> where($data);
        return $Nombres->delete();
    }
}
