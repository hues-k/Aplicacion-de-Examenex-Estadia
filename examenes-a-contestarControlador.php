<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php

/**
 * 
 */
class ControladorExamenaRealizar{

	//---------------------MOSTRAR EXAMEN DE RAVEN-------------------------------------------

	static public function ctrMostrarExamenesaResponder($item,$valor){
		$tabla = "examenuno";

		$respuesta = ModeloExamenesaResponder::mdlMostrarE($tabla,$item,$valor);

		return $respuesta;

	}
	// ------------------- FIN DE MOSTRAR EXAMEN DE RAVEN----------------------------------------



// ------------------------MOSTRAR EXAMEN DE CLEAVEN--------------------------------------------------
	static public function ctrMostrarExamenesaResponder2($item,$valor){
		$tabla = "examendos";

		$respuesta = ModeloExamenesaResponder::mdlMostrarE2($tabla,$item,$valor);

		return $respuesta;

	}
	// ----------------------- FIN DE MOSTRAR EL EXAMEN DE CLEAVEN------------------------------------------


	// ---------------------- GUARDAR RESPUESTAS DEL EXAMEN DE CLEAVEN ---------------------------
	static public function ctrGuardarRespuesta(){

		if (isset($_POST["resMas"])) {
			
			$tabla = "test";

		$datos  = array('mas' => $_POST["resMas"],
						 'menos' =>$_POST["resMenos"],
						 'idExamenD' => $_POST["idExamen"],
						 'idUsuario' => $_POST["idusuario"] );

		$respuesta = ModeloExamenesaResponder::mdlRespuestaExamen($tabla, $datos);
		

		  if($respuesta == "ok"){
		  	echo '';	

		 		   }else{
		 			echo '';
		 		}
					

		}

		
	}



	// ------------------------ GUARDAR RESPUESTA DEL EXAMEN RAVEN --------------------------------------------

	static public function ctrGuardarRespuestaE1(){

			if (isset($_POST["checkbox"])) {
			
			$tabla = "placas";
			$res = "";
			// en este caso el foreach recorre el array y solo guarda el valor
			foreach ($_POST["checkbox"] as $value) {
				$res = $res.''.$value;
			}

		$datos  = array('R_correcta' => $res,
						 'IdExamenU' => $_POST["idExamen"],
						 'IdUsuario' => $_POST["idusuario"] );
		

		$respuesta = ModeloExamenesaResponder::mdlRespuestaExamenE1($tabla, $datos);
		

		  if($respuesta == "ok"){
				   	echo "";


		 		   }else{
		 			echo "";
		 		}
					

		}

	}

	// ----------------------------------- FIN DE RESPUESTAS DEL EXAMEN DE RAVEN-------------------------------


	// Suma de respuestas-------------

	static public function CtrSuma($id){
		return ModeloExamenesaResponder::mdlSuma( $id);


		
	}
// =================== guardar los resultados obtenidos===============
	static public function ctrGuardar(){
		if (isset($_POST["Edad"])) {
			$tabla = "resultado";

			$datos = array('edad' =>$_POST["Edad"],
				           'puntuaje' => $_POST["puntuacion"] ,
							'id' =>$_POST["idusuario"]);

			$respuesta = ModeloExamenesaResponder::mdlGuardar($tabla, $datos);

			// var_dump($datos);
			
		  if($respuesta == "ok"){
				   	echo '<script>
				   	window.location = "examenes-a-realizar";
                         </script>';


		 		   }else{
		 			echo "";
		 		}
		}

	}



	// ========== fin de los resultados ==============
	
}