<?php

namespace App\Controllers;
use App\Models\Datosmodel;
class Miniproyecto extends Basecontroller
{
  public function index()
  {
    $model = new datosmodel();
    $datos = $model->listar();
    $data = [
      "datos" => $datos 
      ];
      return view('listado' ,$data);
  }
}
public function obtenerDatos($id){
  $gModel = new DatosModel();
  $data = ["id" => $id];
  $respuesta = $gmodel->obtenerInformacion($data);
  
  $datos = ["datos" => $respuesta];
  return view('actualizar',$datos);
  
}

public fuction insertar(){
  $gmodel = new DatosModel();
  $data =[
    "nombre" => $POST['nombre'],
    "a_paterno" => $_POST['apaterno'],
    "aa_materno => $_POST['amaterno'],
    
    ];
    $respuesta = $gModel->insertar($data);m
    if ($respuesta > 0){
    return redirect()->to(base_url('/index.php'))->with('mensaje','0');
    }else{
    return redirect()->to(base_url('/index.php'))->with('mensaje','1');
    }
    }
    
    public function actualizar(){
    $gModel = new DatosModel();
    $data = [
    "nombre" => $_POST['nombre'],
    "a_paterno" => $_POST['apaterno'],
    "a_materno" => $_POST['amaterno'],
    ];
    $id = ["id" => $_POST['id']];
    $respuesta =  gModel->actualizar($data,$id);
    
    if ($respuesta){
    return redirect()->to(base_url('/index.php'))->with('mensaje','2');
    }else{
    return redirect()->to(base_url('/index.php))->with('mensaje','3');
    }
    }
    public function eliminar($idPersona){
    $gModel = new DatosModel();
    $id = {"id" => $idPersona];
    $respuesta = $gModel->eliminar($id);
    
    if($respuesta){
    return redirect()->to(base_url('/index.php'))->with('mensaje','4');
    }else{
    return redirect()->to(base_url('/index.php))->with('mensaje','5');
    }
    }
    }
    
