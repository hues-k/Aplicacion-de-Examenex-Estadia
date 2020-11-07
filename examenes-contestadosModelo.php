<?php
/**
  * 
 */
class ModeloExamenesContestados{
	
	static public function MdlMostrarResE1($tabla,$item,$valor){
		if ($item != null) {
			
			$stmt = Conexion::conectar()->prepare("SELECT DISTINCT placas.IdUsuario, usuarios.Nombre, usuarios.Apellido from placas, usuarios WHERE placas.IdUsuario = usuarios.IdUsuario ORDER BY usuarios.Nombre ");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT DISTINCT placas.IdUsuario, usuarios.Nombre, usuarios.Apellido from placas, usuarios WHERE placas.IdUsuario = usuarios.IdUsuario ORDER BY usuarios.Nombre ");

			

			$stmt -> execute();

			return $stmt -> fetchAll();

	}
}



	static public function mdlResultadosO($tabla,$item,$valor){
		
		//CREO QUE ESTO NUNCA SE EJECUTA****
	

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");
			$stmt -> execute();

			foreach ($stmt as $rows) {

				$result = $rows['TotalCorrecta'];

				// 2 FILAS ENCONTRADAS EN LA TABLA resultado
				 json_encode($result);

				// 2 COMPARACIONES EN LA TABLA calificacion
          		$stmt_2 = Conexion::conectar()->prepare("
					SELECT resultado.IdResultado, resultado.EdadU, resultado.IdUsuario, resultado.TotalCorrecta, calificacion.Puntuacion, calificacion.Percentil, calificacion.Rango, calificacion.Diagnostico FROM resultado, calificacion WHERE resultado.TotalCorrecta = calificacion.Puntuacion and resultado.TotalCorrecta = " . $result
          			); 
          		
          		//MUESTRA EL TOTAL DE CONSULTAS QUE SE HICIERON
          		 json_encode($stmt_2);

          		$stmt_2 -> execute();	

        	}

        	// NO SE PORQUE SOLO DEVUELVE 1 RESULTADO, DEBERÍAN DE SER 2  >:/
        	// Creo que ya aqui tu puedes solo xd
        	return $stmt_2 -> fetchAll();

		

		

		$stmt = close();
		$stmt = null;

	}

	
	// ============== restante mostrar
	static public function mdlRestantesE1($tabla, $item, $valor){
		if ($item != null) {
			
			$stmt = Conexion::conectar()->prepare("SELECT DISTINCT placas.IdUsuario, usuarios.Nombre, usuarios.Apellido FROM placas RIGHT JOIN usuarios ON placas.IdUsuario = usuarios.IdUsuario WHERE placas.IdUsuario IS null ");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT DISTINCT placas.IdUsuario, usuarios.Nombre, usuarios.Apellido FROM placas RIGHT JOIN usuarios ON placas.IdUsuario = usuarios.IdUsuario WHERE placas.IdUsuario IS null ");

			

			$stmt -> execute();

			return $stmt -> fetchAll();



	}
}

// ============= Fin restante
	
// ============== restante mostrar
	static public function mdlRestanteE2($tabla, $item, $valor){
		if ($item != null) {
			
			$stmt = Conexion::conectar()->prepare("SELECT DISTINCT test.IdUsuario, usuarios.Nombre, usuarios.Apellido FROM test RIGHT JOIN usuarios ON test.IdUsuario = usuarios.IdUsuario WHERE test.IdUsuario IS null ");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT DISTINCT test.IdUsuario, usuarios.Nombre, usuarios.Apellido FROM test RIGHT JOIN usuarios ON test.IdUsuario = usuarios.IdUsuario WHERE test.IdUsuario IS null ");

			

			$stmt -> execute();

			return $stmt -> fetchAll();



	}
}

// ============= Fin restante


	static public function MdlMostrarResE2($tabla, $item, $valor){
		if ($item != null) {
			
			$stmt = Conexion::conectar()->prepare("SELECT DISTINCT test.IdUsuario, usuarios.Nombre, usuarios.Apellido from test, usuarios WHERE test.IdUsuario = usuarios.IdUsuario ORDER BY usuarios.Nombre  ");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT DISTINCT test.IdUsuario, usuarios.Nombre, usuarios.Apellido from test, usuarios WHERE test.IdUsuario = usuarios.IdUsuario ORDER BY usuarios.Nombre ");

			

			$stmt -> execute();

			return $stmt -> fetchAll();



	}
}

// ================mostar ña cañificacion final==================
static public function mdlCalificacion($tabla,$item,$valor){
	if ($item != null) {
			
			
	$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

			

			$stmt -> execute();

			return $stmt -> fetchAll();


		}

		

		$stmt = close();
		$stmt = null;


}
// ================Fin de mostrar la calificacion final ===============


static public function MdlResRespuestaCleven($tabla, $item, $valor){

				if ($item != null) {
			
			
	$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

			

			$stmt -> execute();

			return $stmt -> fetchAll();


		}

		

		$stmt = close();
		$stmt = null;

	

}

/*
REALIZA LA CONSULTA A LA BD PARA OBTENER LOS RESULTADOS DEL USUARIO SELECCIONADO
 */
static public function MdlResRespuestaCleven_2($id){
	$stmt = Conexion::conectar()->prepare("SELECT * FROM `test` WHERE IdExamenD = 2 and IdUsuario = ".$id);
       $stmt -> execute();
       return $stmt;
}

/*
REALIZA LA CONSULTA A LA BD PARA OBTENER la calificacion DEL USUARIO SELECCIONADO
 */
// static public function mdlResultadosF( $tabla,$datos,  $p ){
// 	$stmt = Conexion::conectar()->prepare("SELECT * FROM `test` WHERE IdExamenD = 2 and IdUsuario = ".$id);
//        $stmt -> execute();
//        return $stmt;
// }



// ================== Mostrar Respuesta cleaver
static public function mdlmostrarMasMenos($tabla,$item,$valor){
	if ($item != null) {
			
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			 $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");			

			$stmt -> execute();

			return $stmt -> fetchAll();


		}

		

		$stmt = close();
		$stmt = null;




}
// ================== Fin de mostrar Respuestas cleaver


static public function MdlGurdarComentario($tabla,$datos){
	$stmt = Conexion::conectar()-> prepare ("INSERT INTO $tabla(Mensaje, IdTest, IdUsuario) VALUES (:comentario, :idtest, :idUsuario)");

				$stmt -> bindParam(":comentario",$datos["comentario"],PDO::PARAM_STR);
				$stmt -> bindParam(":idtest",$datos["idTest"],PDO::PARAM_INT);
				$stmt -> bindParam(":idUsuario",$datos["idUsuario"],PDO::PARAM_INT);
				

				if($stmt->execute()){
				 	return "ok";
				 }else{
				 	return "error";
				 }
				 $stmt ->close();
				 $stmt = null;


}


static public function MdlMostrarComentario($tabla,$item,$valor){
	if ($item != null) {
			
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

			

			$stmt -> execute();

			return $stmt -> fetchAll();


		}

		

		$stmt = close();
		$stmt = null;


 }



 // ===========Borras Respuesta==========

 static public function mdlBorrarRespuesta($tabla, $datos){
 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE IdUsuario =:id");


		$stmt -> bindParam(":id", $datos ,PDO::PARAM_INT);

		if ($stmt -> execute()) {
        	return "ok";
        }else{
        	return "error";
        }

        $stmt -> close();

        $stmt = null;
 }

 // ===========Borras Respuesta Raven==========

 static public function mdlEliminarRaven($tabla, $datos){
 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE IdUsuario =:id");


		$stmt -> bindParam(":id", $datos ,PDO::PARAM_INT);

		if ($stmt -> execute()) {
        	return "ok";
        }else{
        	return "error";
        }

        $stmt -> close();

        $stmt = null;
 }
 

}
