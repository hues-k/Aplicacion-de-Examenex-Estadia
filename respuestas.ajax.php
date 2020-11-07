<?php
require_once "../Controlador/examenes-contestadosControlador.php";
require_once "../Modelo/examenes-contestadosModelo.php";

 class AjaxRespuestas{

 	// mostar respuestas y agr
 	public $idUsuario;

 	public function AjaxRespuestasUsuario(){

 		$item = "IdUsuario"; //es el nombre de la celda de la base de datos
 		$valor = $this ->idUsuario; //este trae la propiedad o los datos post

 		$respuesta = ControladorExamenesContestados::ctrRespuestaCleven($item, $valor);
 		
 		return ($respuesta);



 	}

 }

 // objeto d

 if (isset($POST_["idUsuario"])) {


 $mostar = new AjaxRespuestas();
 $mostar -> idUsuario = $POST_["idUsuario"];
 $mostar -> AjaxRespuestasUsuario();

 }

