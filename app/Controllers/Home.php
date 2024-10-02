<?php

namespace App\Controllers;
use App\Models\LibreriaModel;

class Home extends BaseController
{
    public function index()
    {
        $model= new LibreriaModel();
        $datos=$model->listarLibros();
        $mensaje = session('mensaje');

        $data=[
            "datos"=>$datos,
            "mensaje"=> $mensaje
        ];

        return view('controlLibreria', $data);
    }
    public function crearIndex(){
        return view('crear');
    }

    public function crear(){
        $datos = [
            "titulo" =>$_POST['titulo'], 
            "autor" =>$_POST['autor'],
            "publicacion" =>$_POST['publicacion'],
            "genero" =>$_POST['genero']
        ];

        $Crud  = new LibreriaModel();
        $respuesta = $Crud-> insertar($datos);

        if($respuesta > 0){
            return redirect()->to(base_url().'/')->with('mensaje', '1');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje', '0');
        }

    }
    

    public function actualizar(){
        $datos = [
            "titulo" =>$_POST['titulo'], 
            "autor" =>$_POST['autor'],
            "publicacion" =>$_POST['publicacion'],
            "genero" =>$_POST['genero']
        ];

        $id_nombre = $_POST["id_nombre"];

        $Crud  = new LibreriaModel();

        $respuesta = $Crud-> actualiazar($datos, $id_nombre);

        if($respuesta){
            return redirect()->to(base_url().'/')->with('mensaje', '2');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje', '3');
        }

    }

    public function obtenerNombre($idNombre){
        $data = ["id_nombre" => $idNombre];
        $Crud = new LibreriaModel();
        $respuesta = $Crud->obtenerNombre($data);

        if(count($respuesta) > 0) {
            $datos = [
                "id_nombre"    => $respuesta[0]['id_nombre'],
                "titulo"       => $respuesta[0]['titulo'],
                "autor"        => $respuesta[0]['autor'],
                "publicacion"  => $respuesta[0]['publicacion'],
                "genero"       => $respuesta[0]['genero']
            ];
    
            return view('actualizar', $datos);
        } else {
            return redirect()->to(base_url().'/')->with('mensaje', 'Libro no encontrado');
        }
    }

    public function eliminar($id_nombre){
        $Crud = new LibreriaModel();
        $data = ["id_nombre" => $id_nombre];
        
        $respuesta = $Crud->eliminar($data);

        if($respuesta){
            return redirect()->to(base_url().'/')->with('mensaje', '4');
        }else{
            return redirect()->to(base_url().'/')->with('mensaje', '5');
        }
    }
}

