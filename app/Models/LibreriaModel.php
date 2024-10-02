<?php

namespace App\Models;

use CodeIgniter\Model;

class LibreriaModel extends Model
{
    //recoge todos los datos de TLibros
    public function listarLibros(){
        $datos=$this->db->query("SELECT*FROM TLibros");
        return $datos->getResult();
    }
    //envia los datos a la db
    public function insertar($datos){
        $Nombres = $this -> db -> table('TLibros');
        $Nombres -> insert($datos);
        
        return $this-> db-> insertID();  
    }
    //busca en los datos de la db y manda el resultado del libro con el Id especifico
    public function obtenerNombre($data){
        $Nombres = $this -> db -> table('TLibros');
        $Nombres ->where($data);

        return $Nombres ->get()->getResultArray();
    }
    //busca los datos especificos y los vuelve a subir en la deb con su ID correspondiente
    public function actualiazar($data, $id_nombre){
        $Nombres = $this -> db -> table('TLibros');
        $Nombres->set($data);
        $Nombres->where('id_nombre', $id_nombre);
        return $Nombres->update();
    }
     //busca en los datos de la db y elimina el libro con el Id especifico
    public function eliminar($data){
        $Nombres = $this -> db -> table('TLibros');
        $Nombres-> where($data);
        return $Nombres->delete();
    }
}
