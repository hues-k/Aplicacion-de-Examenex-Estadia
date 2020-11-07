<aside class="main-sidebar">
	
	<section class="sidebar">
		<ul class="sidebar-menu">

			<?php

			if ($_SESSION["tipo"] == "Administrador") {

			echo '<li class="active">
				<a href="inicio">
					<i class="fa fa-home"></i>
					<span>Inicio</span>
				</a>
			</li>
			<li>
				<a href="usuarios">
					<i class="fa fa-user"></i>
					<span>Usuarios</span>
				</a>
			</li>
			<li>
				<a href="examenes">
					<i class="fa fa-book"></i>
					<span>Examenes</span>
				</a>
			</li>';}


			if ($_SESSION["tipo"] == "Administrador" ||   $_SESSION["tipo"] == "Psicologa") {

			 echo '<li>
				<a href="examenes-contestados">
					<i class="fa fa-clipboard"></i>
					<span>Examenes Contestados</span>
				</a>
			</li>
			<li>
				<a href="examenes-restantes">
					<i class="fa fa-clipboard"></i>
					<span>Examenes Restantes</span>
				</a>
			</li>';
		}


		if ($_SESSION["tipo"] == "Empleado"){
			echo '<li>
				<a href="examenes-a-realizar">
					<i class="fa fa-book"></i>
					<span>Examenes a Realizar</span>
				</a>
			</li>';
		}

			?>
		</ul>
		
	</section>

</aside>