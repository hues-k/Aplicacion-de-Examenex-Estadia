<header class="main-header">

<!--===================================================================== 
	LOGOTIPO                                                       
 ===================================================================== -->
	<a href="inicio" class="logo">
		<!-- Logo mini -->
		<span class="logo-mini">
	
			<img src="Vista/imagenes/plantilla/logocbt2.png" class="img-responsive" style="padding: 10px">
		</span>

		<!-- Logo Normal -->
		<span class="logo-lg">
	
			<!-- <img src="Vista/imagenes/plantilla/logocbt2.png" class="img-responsive"> -->
		</span>	
	</a>
	<!--===================================================================== 
BARRA DE NAVEGACION                                                       
 ===================================================================== -->
<nav class="navbar navbar-static-top" role="navigation">
	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
		<span class="sr-only"></span>

	</a>
	<!-- Perfil usuario -->

	<div class="navbar-custom-menu">

		<ul class="nav navbar-nav">
			
			<li class="dropdown user user-menu">
				
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					
					<img src="Vista/imagenes/usuarios/default/anonymous.png" class="user-image" >
					<span class="hidden-xs"><?php echo  $_SESSION["nombre"]; ?> </span>

				</a>
				<!-- Dropdown-toggle -->

				<ul class="dropdown-menu">

					<li class="user-body">
						<div class="pull-right">

							<a href="salir" class="btn btn-default btn-flat">Salir</a>
							
						</div>
						
					</li>
				
				</ul>

			</li>

		</ul>
		
	</div>

</nav>


</header>