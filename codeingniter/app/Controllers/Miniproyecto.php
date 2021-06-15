<?php

namespace App\Controllers;
use App\models\datosmodel;
class miniproyecto extends basecontroller
{
  public function index()
  {
    $model = new datosmodel();
    $datos = $model->listar();
    $data = [
      "datos" => $datos 
      ]
      return view('listado' ,$data);
  }
}
