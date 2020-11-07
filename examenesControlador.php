<?php

class ControladorExamenes{


	// MOstrar

	static public function ctrMostrarExamenes1($item, $valor){
		 $tabla = "examenuno";

		 $respuesta = ModelosExamen::mdlMostrarExamen1($tabla, $item ,$valor);

		 return $respuesta;

    }


	static public function ctrMostrarExamenes2($item, $valor){
		 $tabla = "examendos";

		 $respuesta = ModelosExamen::mdlMostrarExamen2($tabla, $item ,$valor);

		 return $respuesta;

}


	


}
