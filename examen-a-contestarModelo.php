<?php

require_once "conexion.php";
class ModeloExamenesaResponder{


	 // --------------------- MOSTRAR EXAMEN RAVEN----------------------------------------------------------------------

	static public function mdlMostrarE($tabla,$item ,$valor){

		if ($item != null) {
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

				$stmt -> bindParam(":".$item,$valor. PDO::PARAM_STR);
				$stmt -> execute();
				return $stmt -> fetch();

			# code...
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

			$stmt -> execute();

			return $stmt -> fetchAll();


		}
			

			$stmt = close();

		    $stmt = null;

	}
	// ------------------------- FIN DE MOSTRAR PRIMER EXAMEN-------------------------------------------------------------




// -----------------------------MOSTRAR EL SEGUNDO EXAMEN----------------------------------------------------------------

	static public function mdlMostrarE2($tabla,$item ,$valor){

		if ($item != null) {
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

				$stmt -> bindParam(":".$item,$valor. PDO::PARAM_STR);
				$stmt -> execute();
				return $stmt -> fetch();

			# code...
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

			$stmt -> execute();

			return $stmt -> fetchAll();


		}
			

			$stmt = close();

		    $stmt = null;

	}

	// ------------------------ FIN DE MOSTRAR SEGUNDO EXAMEN--------------------------------------------------

	// ===================SUma=========================0
	static public function mdlSuma($id){
		$stmt = Conexion::conectar()->prepare("SELECT sum(R_correcta) as suma from placas where IdUsuario = ".$id);
       	$stmt -> execute();
       	return $stmt;
	}
	// ============== fin suma=====================

	// =========== Guardar Res=============================================
	static public function mdlGuardar($tabla, $datos){
		$stmt = Conexion::conectar()-> prepare ("INSERT INTO $tabla(EdadU, TotalCorrecta, IdUsuario) VALUES (:EdadU, :TotalCorrecta,:IdUsuario)" );

				$stmt -> bindParam(":EdadU",$datos["edad"],PDO::PARAM_INT);
				$stmt -> bindParam(":TotalCorrecta",$datos["puntuaje"],PDO::PARAM_INT);
				$stmt -> bindParam(":IdUsuario",$datos["id"],PDO::PARAM_INT);

				if($stmt->execute()){
				 	return "ok";
				 }else{
				 	return "error";
				 }
				 $stmt ->close();
				 $stmt = null;

	}

	//================ fin de guardar res ================================= 


// -----------------------------GUARDAR LAS RESPUESTAD DEL EXAMEN CLEAVEN-------------------------------------

	static public function mdlRespuestaExamen($tabla, $datos){

	$stmt = Conexion::conectar()-> prepare ("INSERT INTO $tabla(Mas, Menos, IdExamenD, IdUsuario) VALUES (:Mas, :Menos, :IdExamenD, :IdUsuario)");

				$stmt -> bindParam(":Mas",$datos["mas"],PDO::PARAM_STR);
				$stmt -> bindParam(":Menos",$datos["menos"],PDO::PARAM_STR);
				$stmt -> bindParam(":IdExamenD",$datos["idExamenD"],PDO::PARAM_INT);
				$stmt -> bindParam(":IdUsuario",$datos["idUsuario"],PDO::PARAM_INT);

				if($stmt->execute()){
				 	return "ok";
				 }else{
				 	return "error";
				 }
				 $stmt ->close();
				 $stmt = null;



	}
	// -------------FIN DE GUARDAR LAS RESPUESTAS DEL EXAMEN DE CLEAVEN-------------------------------------------------------


// --------------------------GUARDAR RESPUESTAS DEL EXAMEN DE RAVEN---------------------------------------------------------
	static public function mdlRespuestaExamenE1($tabla,$datos){

	$stmt = Conexion::conectar()-> prepare ("INSERT INTO $tabla(R_correcta, IdExamenU, IdUsuario) VALUES (:R_correcta, :IdExamenU, :IdUsuario)");

	$stmt -> bindParam(":R_correcta",$datos["R_correcta"],PDO::PARAM_INT);
				$stmt -> bindParam(":IdExamenU",$datos["IdExamenU"],PDO::PARAM_INT);
				$stmt -> bindParam(":IdUsuario",$datos["IdUsuario"],PDO::PARAM_INT);
				if($stmt->execute()){
				 	return "ok";
				 }else{
				 	return "error";
				 }
				 $stmt ->close();
				 $stmt = null;
	}
	
	// --------------------------FIN DE GUARDAR LAS RESPUESTAS---------------------------------------------------------
	
}


