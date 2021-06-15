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
      ]
      return view('listado' ,$data);
  }
}
