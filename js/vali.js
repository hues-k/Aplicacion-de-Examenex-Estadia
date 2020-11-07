/*<!--===================================================================== 
editar usuario
 ===================================================================== -->*/

function deshabilitaRetroceso(){
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button" //chrome
    window.onhashchange=function(){window.location.hash="no-back-button";}
}

// ==========Eliminar respuestas======

$(".btnEliminarRespuestas").click(function(){
	var idUsuario = $(this).attr("idUsuario");
	swal({
		title: '¿Está Seguro de borrar las respuestas del usuario?',
		text:"¡Si no lo esta puede cancelar la accion!",
		type:'warning',
		showCancelButton:true,
		confirmButtonColor:'#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText:'Cancelar',
		confirmButtonText: 'Si, borrar las respuestas!'
	}).then((result)=>{

		if(result.value){
			window.location = "index.php?ruta=examenes-contestados&idUsuario="+idUsuario;
		}
	})
})

// ==========Eliminar respuestas======

$(".btnEliminarRaven").click(function(){
	var idUsuario = $(this).attr("idUsuario");
	swal({
		title: '¿Está Seguro de borrar las respuestas del usuario?',
		text:"¡Si no lo esta puede cancelar la accion!",
		type:'warning',
		showCancelButton:true,
		confirmButtonColor:'#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText:'Cancelar',
		confirmButtonText: 'Si, borrar las respuestas!'
	}).then((result)=>{

		if(result.value){
			window.location = "index.php?ruta=examenes-contestados&idUsuario="+idUsuario;
		}
	})
})