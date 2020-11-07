<?php

require_once "../Controlador/usuariosControlador.php";
require_once "../Modelo/usuariosModelo.php";

class AjaxUsuarios
{
	// =================== EDITAR USUSARIO===============
	public $idUsuario;
	  public function  ajaxEditarUsuario(){

		$item = "IdUsuario";//BAse de datos
		$valor = $this->idUsuario;

		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);


		echo json_encode($respuesta);

	}

	public $validarUsuario;
	static public function ajaxValidarUsuario(){

		$item = "NombreUsuario";//BAse de datos
		$valor = $this->validarUsuario;

		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

		echo json_encode($respuesta);


	}
	
}


// CREACION DE OBJETOS
//----- editar usuario-----

if(isset($_POST["idUsuari"])){
$editar = new AjaxUsuarios();
$editar -> idUsuario = $_POST["idUsuari"];
$editar -> ajaxEditarUsuario();

}


// Validar usuari

if(isset($_POST["validarUsuario"])){

	$valUsuario = new AjaxUsuarios();
	$valUsuario -> validarUsuario = $_POST["validarUsuario"];
	$valUsuario-> ajaxValidarUsuario();
}

