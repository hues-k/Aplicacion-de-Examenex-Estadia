<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tablero
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
        <li class="active">Tablero</li>
      </ol>
    </section>

   
    <section class="content">
      <div class="row">
        <?php

        if($_SESSION["tipo"] == "Administrador"){

        include "inicio/cajas-superiores.php";
      }



        ?>
     

      </div>
      <div>
        <?php
        
        if($_SESSION["tipo"]== "Psicologa"|| $_SESSION["tipo"]== "Empleado"){

          echo '<div class= "box box-success" >

                <div class= "box-header" >

            <h1>Bienvenid@ ' .$_SESSION["nombre"].'</h1>

            </div>
          </div>';

           }
          ?>
        
      </div>

    

    </section>
    
  </div>
  