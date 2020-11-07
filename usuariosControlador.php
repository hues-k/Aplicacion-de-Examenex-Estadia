<?php

/**
 * 
 */
 class ControladorUsuarios{

		//=============== Ingreso de Usuario=========
		static public function ctrIngresoUsuario(){

			if (isset($_POST["ingUsuario"])) {

				if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"])&&
					preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){


					    $encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

						$tabla = "usuarios";
						$item = "NombreUsuario";
						$valor = $_POST["ingUsuario"];

						$respuesta = ModeloUsuarios::MdlMostrarUsuario($tabla, $item, $valor);

						if($respuesta["NombreUsuario"] == $_POST["ingUsuario"] && $respuesta["Password"] ==  $encriptar){

							$_SESSION["iniciarSesion"] = "ok";
							$_SESSION["id"] = $respuesta["IdUsuario"];
							$_SESSION["nombre"] = $respuesta["Nombre"];
							$_SESSION["apellido"] = $respuesta["Apellido"];
							$_SESSION["fechaN"] = $respuesta["FechaNacimiento"];
							$_SESSION["tipo"] = $respuesta["Tipo"];
							$_SESSION["nombreU"] = $respuesta["NombreUsuario"];
							$_SESSION["puesto"] = $respuesta["Puesto"];

							echo '<script>

							window.location = "inicio";

							</script>';



						}else{

							echo '<br><div class = "alert alert-danger"> Error al ingresar, Vuelve a intentarlo</div>';
						}

				}
				
			}

		}


		// =======REGISTRO DE USUARIO

		static public function ctrCrearUsuario(){
			if(isset($_POST["NuevoNusuario"])){
					if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["NuevoNombre"]) &&
					   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["NuevoApellido"])&&
					   preg_match('/^[a-zA-Z0-9]+$/', $_POST["NuevoNusuario"]) &&
					   preg_match('/^[a-zA-Z0-9]+$/', $_POST["NuevoContraseña"])&&
					   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["NuevoPuesto"])){

					   	$tabla = "usuarios";

					   $encriptar = crypt($_POST["NuevoContraseña"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

					   $datos = array('nombre' =>  $_POST["NuevoNombre"], 
									  'apellido'=> $_POST["NuevoApellido"],
									  'fecha'=> $_POST["NuevoFecha"],
									  'perfil'=> $_POST["NuevoPerfil"],
									  'usuario'=> $_POST["NuevoNusuario"],
									  'pass'=>  $encriptar,
									  'puesto'=> $_POST["NuevoPuesto"] );

					   $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
					   if($respuesta == "ok"){
					   	echo '<script>

						swal({

							type: "success",
							title: "¡El usuario ha sido guardado correctamente!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
							closeOnConfirm:false
						}).then((result)=>{

							if(result.value){
							
								window.location = "usuarios";

							}

						});
					

					</script>';

					   }


					}else{
						echo '<script>

						swal({

							type: "Error",
							title: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar",
							

						}).then((result)=>{

							if(result.value){
							
								window.location = "usuarios";

							}

						});
					

					</script>';
					}
					

				}

		}

		// ======== MOSTRAR USUARIOS ===========

		static public  function ctrMostrarUsuarios($item,$valor){

			$tabla = "usuarios";

			$respuesta = ModeloUsuarios::MdlMostrarUsuario($tabla, $item, $valor);

			return $respuesta;


		}


		// ============= EDITAR USUARIO =========== 

	public function ctrEditarUsuario(){

		if (isset($_POST["EditarNombre"])){

		    if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["EditarNombre"]) &&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["EditarApellido"])&&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["EditarPuesto"])){



				$tabla = "usuarios";

				if ($_POST["editarContraseña"] != "") {

						if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarContraseña"])) {
							
							$encriptar = crypt($_POST["editarContraseña"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

						}else{
									echo'<script>

								swal({
									  type: "error",
									  title: "¡La contraseña no puede ir vacía o llevar caracteres especiales!",
									  showConfirmButton: true,
									  confirmButtonText: "Cerrar"
									  }).then((result)=>{
										if (result.value) {

										window.location = "usuarios";

										}
									})

						  	</script>';

       						}						

				}else{

					$encriptar = $passwordActual;


				       }

				    $datos = array("nombre"   => $_POST["EditarNombre"], 
								   "apellido" => $_POST["EditarApellido"],
								   "fecha"    => $_POST["EditarFecha"],
							  	   "perfil"   => $_POST["editarPerfil"],
								   "usuario"  => $_POST["EditarNusuario"],
								   "pass"     => $encriptar,
								   "puesto"   => $_POST["EditarPuesto"] );

				    $respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);

				    if($respuesta == "ok"){

				    	echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';

				    }

			} else {

				 echo'<script>

					swal({
						  type: "error",
						  title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then((result)=>{
							if (result.value) {

							window.location = "usuarios";

							}
						})

			  	</script>';

				
			}


		}
	}

// ===============================================================
//	BORRAR USUARIO
	//=======================================================

	static public  function ctrBorrarUsuario(){

		if(isset($_GET["idUsuario"])){

			$tabla ="usuarios";
			
			$datoS = $_GET["idUsuario"];

			$respuesta = ModeloUsuarios::mdlBorrarUsuario($tabla, $datoS);

			if($respuesta == "ok"){

				    	echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido borrado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "usuarios";

									}
								})

					</script>';

				    }



		}
	}

}
