/*<!--=-==================================================================== 
editar usuario
 ===================================================================== -->*/

$(".btnEditarUsuario").click(function(){

	var idUsuario = $(this).attr("idUsuario");
	
	var datos = new FormData();

	datos.append("idUsuari",idUsuario);

	$.ajax({
		url:"ajax/usuarios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			$("#EditarNombre").val(respuesta["Nombre"]);
			$("#EditarApellido").val(respuesta["Apellido"]);
			$("#editarPerfil").html(respuesta["Tipo"]);
			$("#editarPerfil").val(respuesta["Tipo"]);

			$("#EditarFecha").val(respuesta["FechaNacimiento"]);
			$("#EditarNusuario").val(respuesta["NombreUsuario"]);
			
			$("#passwordActual").val(respuesta["Password"]);
			
			$("#EditarPuesto").val(respuesta["Puesto"]);





		}

	});

})

// ELIMINAR USU

$(".btnEliminarUsuario").click(function(){

	var idUsuario = $(this).attr("idUsuario");


	swal({
		title: '¿Está Seguro de borrar el usuario?',
		text:"¡Si no lo esta puede cancelar la accion!",
		type:'warning',
		showCancelButton:true,
		confirmButtonColor:'#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText:'Cancelar',
		confirmButtonText: 'Si, borrar usuario!'
	}).then((result)=>{

		if(result.value){
			window.location = "index.php?ruta=usuarios&idUsuario="+idUsuario;
		}
	})

})


/*<!--===================================================================== 
  REvisar usuario Repetido si ya existe
 ===================================================================== -->*/

 $("#NuevoNusuario").change(function(){

 	var usuario = $(this).val();

 	var datos = new  FormData();
 	datos.append("validarUsuario", usuario);

 	$.ajax({
		url:"ajax/usuarios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success:function(respuesta){

             if (respuesta) {
             	$("#NuevoNusuario").parent().after('<div class="alert alert-warning">Este usuario ya existe en la base de datos</div> ');
             	$("#NuevoNusuario").val("");



             }
		}
	})


 })

 /*<!--===================================================================== 
 Mostrar Respuestas
 ===================================================================== -->*/
 $(".btnMostrarRespuesta").click(function(){

 	var idUsuario = $(this).attr("idUsuario");

 	var datos = new FormData();
 	datos.append("idUsuario", idUsuario);

 	$.ajax({

 		url:"ajax/respuesta.ajax.php",
 		method:"POST",
 		data: datos,
 		cache:false,
 		contentType:false,
 		processData:false,
 		dataType:"json",
 		success:function(respuesta){

 			console.log("respuesta",respuesta);
 		}
 	})
 })
 // ================= VER RESPUESTAS=================================

 $(".btnVerRespuestas").click(function(){
 	var idusuario = $(this).attr("idUsuario");

 	window.location = "index.php?ruta=RespuestaCleven&idUsuario="+idusuario;
 })
   