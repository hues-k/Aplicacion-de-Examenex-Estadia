<?php
require_once "conexion.php";


//------------------- MOSTRAR USUARIO--------------------------------------------------------------------------------------------
class ModeloUsuarios{

	static public function MdlMostrarUsuario($tabla, $item, $valor){
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
// ------------------------------FIN DE MOSTRAR USUARIO--------------------------------------------------------------------

// ====================REGISTRO USUARIO===============================================================

	static public function mdlIngresarUsuario($tabla,$datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( Nombre, Apellido, FechaNacimiento, Tipo, NombreUsuario, Password, Puesto) VALUES (:Nombre, :Apellido, :FechaNacimiento, :Tipo, :NombreUsuario, :Password, :Puesto)");

			$stmt -> bindParam(":Nombre", $datos["nombre"],PDO::PARAM_STR);
			$stmt -> bindParam(":Apellido", $datos["apellido"] ,PDO::PARAM_STR);
			$stmt -> bindParam(":FechaNacimiento", $datos["fecha"],PDO::PARAM_STR);
			$stmt -> bindParam(":Tipo",  $datos["perfil"] ,PDO::PARAM_STR);
			$stmt -> bindParam(":NombreUsuario",$datos["usuario"] ,PDO::PARAM_STR);
			$stmt -> bindParam(":Password", $datos["pass"] ,PDO::PARAM_STR);
			$stmt -> bindParam(":Puesto", $datos["puesto"] ,PDO::PARAM_STR);

			if ($stmt -> execute()) {
				
				return "ok";

			}else{
				return "error";
			}

			$stmt -> close();
			$stmt = null;


	}
	// ------------------------------FIN DE REGISTRO USUARIO-----------------------------------------------------------


	// -----------------------------------------Editar Usuario----------------------------------------------------------


	static public function mdlEditarUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nombre = :nombre , Apellido = :apellido, FechaNacimiento = :fecha , Tipo = :tipo, Password = :password, Puesto = :puesto WHERE NombreUsuario = :usuario");

		$stmt -> bindParam(":nombre", $datos["nombre"] ,PDO::PARAM_STR);
		$stmt -> bindParam(":apellido", $datos["apellido"] ,PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $datos["fecha"] ,PDO::PARAM_STR);
		$stmt -> bindParam(":tipo", $datos["perfil"] ,PDO::PARAM_STR);
		$stmt -> bindParam(":usuario", $datos["usuario"] ,PDO::PARAM_STR);
        $stmt -> bindParam(":password", $datos["pass"] ,PDO::PARAM_STR);
        $stmt -> bindParam(":puesto", $datos["puesto"] ,PDO::PARAM_STR);


        if ($stmt -> execute()) {
        	return "ok";
        }else{
        	return "error";
        }

        $stmt -> close();

        $stmt = null;
	}
// -----------------------------------------------fIN EDITAR USUARIO---------------------------------------------------------------


//--------------------------------------------- Borra usuario------------------------------------------------------------------

static public function mdlBorrarUsuario($tabla, $datoS){

	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE IdUsuario =:id");


		$stmt -> bindParam(":id", $datoS ,PDO::PARAM_INT);

		if ($stmt -> execute()) {
        	return "ok";
        }else{
        	return "error";
        }

        $stmt -> close();

        $stmt = null;


}

// ----------------------FIN DE BORRAR USUARIO


}
