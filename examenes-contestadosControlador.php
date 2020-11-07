<?php


class ControladorExamenesContestados{ 
	// ================= MOSTRAR RESULTADO DE EXAMEN RAVEN=======================-
	static public function ctrMostrarExamenesC1($item, $valor){

		$tabla = "placas";

			$respuesta = ModeloExamenesContestados::MdlMostrarResE1($tabla, $item, $valor);

			return $respuesta;

	


	}
	// -------------- FIN DE RESULTADOS DEL EXAMEN RAVEN----------------------

	// ================= MOSTRAR RESULTADO  obtenidos DE EXAMEN RAVEN=======================-
	static public function ctrResultadosO($item, $valor){

		$tabla = "resultado";

			$respuesta = ModeloExamenesContestados::mdlResultadosO($tabla, $item, $valor);

			return $respuesta;

	


	}
	// -------------- FIN DE RESULTADOS DEL EXAMEN RAVEN----------------------


	// // ================= MOSTRAR RESULTADO  Finales obtenidos DE EXAMEN RAVEN=======================-
	// static public function ctrResultadosF(   $p){

	// 	$tabla = "calificacion";
		

	// 		$respuesta =ModeloExamenesContestados::mdlResultadosF( $tabla,  $p);
	// 	return $respuesta ;


	


	// }
	// -------------- FIN DE RESULTADOS DEL EXAMEN RAVEN----------------------


	// ================= MOSTRAR Calificacion obtenida DE EXAMEN RAVEN=======================-
	static public function ctrCalificacion($item, $valor){

		$tabla = "calificacion";

			$respuesta = ModeloExamenesContestados::mdlCalificacion($tabla, $item, $valor);

			return $respuesta;

	


	}
	// -------------- FIN DECalificacion obtenida DE EXAMEN RAVEN--------------------

	// =========== Restantes de Ex1 ?===========

	static public function ctrRestantesE1($item,$valor){
		$tabla = "placas";

			$respuesta = ModeloExamenesContestados::mdlRestantesE1($tabla, $item, $valor);

			return $respuesta;
	}


	// =======0fin restantes


	// =========== Restantes de Ex2 ?===========

	static public function ctrRestantesE2($item,$valor){
		$tabla = "test";

			$respuesta = ModeloExamenesContestados::mdlRestanteE2($tabla, $item, $valor);

			return $respuesta;
	}


	// =======0fin restantes



	// =============== MOSTRAR RESULTADO DE EXAMEN CLEAVEN ========================

	static public function ctrMostrarResE2($item, $valor){
		$tabla = "test";

			$respuesta = ModeloExamenesContestados::MdlMostrarResE2($tabla, $item, $valor);

			return $respuesta;

	}

	// ================== Mostrar Respuesta cleaver

	static public function ctrMostrarMasyMenos($item, $valor){
		

			$tabla = "test";
			
	$respuesta = ModeloExamenesContestados::mdlmostrarMasMenos($tabla, $item, $valor);
			return $respuesta;
		


	}
// ================== Fin de mostrar Respuestas cleaver


	static public function ctrRespuestaCleven($item,$valor){
		$tabla = "test";
		$respuesta = ModeloExamenesContestados::MdlResRespuestaCleven( $tabla, $item, $valor);
		return $respuesta;
	}

	/*
	MUESTRA LOS RESULTADOS DEL USUARIO SELECCIONADO
	 */
	static public function ctrRespuestaCleven_2($id){
		return ModeloExamenesContestados::MdlResRespuestaCleven_2( $id);
	}


	// ================= Guardar comentario ==========================

	static public function ctrGurdarComentario(){
		if (isset($_POST["comentario"])) {

		$tabla = "mensaje";
		$datos = array('comentario' => $_POST["comentario"] ,
		                'idTest' => $_POST["idExamen"] ,
		                'idUsuario' => $_POST["idusuario"]);

		$respuesta =ModeloExamenesContestados::MdlGurdarComentario($tabla,$datos);
		 if($respuesta == "ok"){
		  	echo'<script>

					swal({
						  type: "success",
						  title: "El comentario ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "examenes-contestados";

									}
								})

					</script>';

				    }

			} else{
		 			echo '';
		 		}
		}
		

	

	static public function ctrMostrarComentario($item,$valor){
		$tabla = "mensaje";

		$respuesta = ModeloExamenesContestados::MdlMostrarComentario($tabla,$item,$valor);
		return $respuesta;
		
	}



// ===================Eliminar respuestas============

	static public function ctrBorrarRespuestas(){

		if (isset($_GET["idUsuario"])) {
		$tabla = "test";
		$datos = $_GET["idUsuario"];

		$respuesta = ModeloExamenesContestados::mdlBorrarRespuesta($tabla,$datos);

			if($respuesta == "ok"){

				    	echo'<script>

					swal({
						  type: "success",
						  title: "Las respuestas ha sido borrado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "examenes-contestados";

									}
								})

					</script>';

				    }


		}

	}

	static public function ctrEliminarRaven(){

		if (isset($_GET["idUsuario"])) {
			
		$tabla = "resultado";
		$datos = $_GET["idUsuario"];

		$respuesta = ModeloExamenesContestados::mdlEliminarRaven($tabla,$datos);

			if($respuesta == "ok"){

				    	echo'<script>

					swal({
						  type: "success",
						  title: "Las respuestas ha sido borrado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "examenes-contestados";

									}
								})

					</script>';

				    }


		}

	}



	


}
