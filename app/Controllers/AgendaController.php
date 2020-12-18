<?php namespace App\Controllers;

use App\Models\CategoriaModel;
use App\Models\ContactosModel;

class AgendaController extends BaseController
{
    
	public function index()
	{
		return view('principal');
	}

	public function categoria(){
		$Crud = new CategoriaModel();
		$datos = $Crud->listarCategoria();

		$mensaje = session('mensaje');

		$data = [
			"datos" => $datos,
			"mensaje" => $mensaje
        ];
        
		return view('categoria', $data);
	}

	public function crearCategoria(){
		$datos = [
			"categoria" => $_POST['categoria'],
			"descripcion" => $_POST['descripcion'],
			"fecha" => $_POST['fecha']
		];
		$Crud = new CategoriaModel();
		$respuesta = $Crud->insertar($datos);

		if ($respuesta > 0){
			return redirect()->to(base_url().'/categoria')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/categoria')->with('mensaje','0');
		}

	}

	public function actualizarCategoria(){
		$datos = [
			"categoria" => $_POST['categoria'],
			"descripcion" => $_POST['descripcion'],
			"fecha" => $_POST['fecha']
		];
		$idCategoria =  $_POST['idCategoria'];

		$Crud = new CategoriaModel();

		$respuesta = $Crud->actualizar($datos, $idCategoria);

		if ($respuesta){
			return redirect()->to(base_url().'/categoria')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/categoria')->with('mensaje','3');
		}
	}

	public function obtenerCategoria($idCategoria){
		$data = ["id_categoria" => $idCategoria];
		$Crud = new CategoriaModel();
		$respuesta = $Crud->obtenerCategoria($data);

		$datos = ["datos"=>$respuesta];

		return view('upCategoria', $datos);
	}

	public function eliminarCategoria($idCategoria){
		$Crud = new CategoriaModel();
		$data = ["id_categoria" => $idCategoria];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta){
			return redirect()->to(base_url().'/categoria')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/categoria')->with('mensaje','5');
		}
	}
	
	public function contactos(){
		$Crud = new ContactosModel();
		$datos = $Crud->listarContactos();

		$mensaje = session('mensaje');

		$data = [
			"datos" => $datos,
			"mensaje" => $mensaje
		];
		return view('contactos', $data);
	}
	public function crearContacto(){
		$datos = [
			"nombre" => $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno'], 
			"telefono" => $_POST['telefono'],
			"email" => $_POST['email'],
			"id_categoria" => $_POST['id_categoria'],
			"fecha" => $_POST['fecha']
		];
		$Crud = new ContactosModel();
		$respuesta = $Crud->insertarContacto($datos);

		if ($respuesta > 0){
			return redirect()->to(base_url().'/contactos')->with('mensaje','1');
		}else{
			return redirect()->to(base_url().'/contactos')->with('mensaje','0');
		}

	}

	public function actualizarContacto(){
		$datos = [
			"nombre" => $_POST['nombre'],
			"paterno" => $_POST['paterno'],
			"materno" => $_POST['materno'],
			"telefono" => $_POST['telefono'],
			"email" => $_POST['email'],
			"id_categoria" => $_POST['id_categoria'],
			"fecha" => $_POST['fecha']
		];
		$idContacto =  $_POST['idContacto'];

		$Crud = new ContactosModel();

		$respuesta = $Crud->actualizarContacto($datos, $idContacto);

		if ($respuesta){
			return redirect()->to(base_url().'/contactos')->with('mensaje','2');
		}else{
			return redirect()->to(base_url().'/contactos')->with('mensaje','3');
		}
	}

	public function obtenerContacto($idContacto){
		$data = ["id_contacto" => $idContacto];
		$Crud = new ContactosModel();
		$respuesta = $Crud->obtenerContactos($data);

		$datos = ["datos"=>$respuesta];

		return view('upContacto', $datos);
	}

	public function eliminarContacto($idContacto){
		$Crud = new ContactosModel();
		$data = ["id_contacto" => $idContacto];

		$respuesta = $Crud->eliminarContacto($data);

		if ($respuesta){
			return redirect()->to(base_url().'/contactos')->with('mensaje','4');
		}else{
			return redirect()->to(base_url().'/contactos')->with('mensaje','5');
		}
	}


}
