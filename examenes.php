<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar Examenes
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
        <li class="active">Administrar Examenes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">       

        <div class="box-body">
            
        <table class="table table-bordered table-striped dt-responsive text-justify">

          <thead>
                      
            <tr>
           <th style="width: 10px">Id</th>
              <th>Nombre</th>
              <th >Descripcion</th>
              
            </tr>
          </thead>

            <tbody>

              <?php

              $item = null;
              $valor = null;

              $exam = ControladorExamenes::ctrMostrarExamenes1($item, $valor);

             

              foreach ($exam as $key => $value) {

                echo ' <tr>

                <td>'.($key+2).'</td>

                <td>'.$value["NombreExamU"].'</td>

                <td>A continuación se te mostrarán distintas placas, tendrás que decidir cuál es la figura que completa a cada una. El test consta de 60 placas, te recomendamos que lo hagas con tiempo. Para completar el test cuentas con 45 minutos, ellos son suficientes así que no te apures.  Al finalizar obtendrás tu coeficiente intelectual en base a los valores estadísticos para tu edad</td>

                

                
              </tr> ';
              }


              ?>

             
            </tbody>
          </table>
        </div>
      </div>


      <!-- EXAMEN 2 -->

 <div class="box-body">
            
        <table class="table table-bordered table-striped dt-responsive ">

          <thead>
                      
            <tr>
           <th style="width: 10px">Id</th>
              <th>Nombre</th>
              <th>Descripcion</th>
             
            </tr>
          </thead>

            <tbody>

              <?php

              $item = null;
              $valor = null;

              $exam2 = ControladorExamenes::ctrMostrarExamenes2($item, $valor);

             

              foreach ($exam2 as $key => $value) {

                echo ' <tr>

                <td>'.($key+1).'</td>

                <td>'.$value["NombreExamD"].'</td>

                <td>Las palabras descriptivas que verá a continuación se encuentran agrupadas en series de cuatro, examine las palabras de cada serie y anote una columna "MAS" de la palabra que mejor describa su forma de ser o de comportarse. Después seleccione "MENOS" en la palabra que menos describa su forma de ser.</td>

                
              </tr> ';
              }


              ?>

             
            </tbody>
          </table>
        </div>

    </section>
    
  </div>






  
  <!-- =========MODAL MODIFICAR EXAMEN =======-->
  <div  id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post">
      <!-- Modal Cabeza -->
      <div class="modal-header" style="background: #3c8dbc; color:white">
        <h4 class="modal-title">Modiciar Examen</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal Cuerpo -->
      <div class="modal-body">
        <div class="box-body">

          <!-- editar Nombre del examen-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="EditarNombre" value=""  required>
            </div>            
          </div>
          <!-- Fin de Nombre del examen -->

        

          <!-- editar Descripcion -->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-users"></i></span>
              <input type="text" class="form-control input-lg" name="EditarDescripcion" value="" required>
            </div>            
          </div>
          <!-- Fin de descripcion -->

           <!-- editar Tiempo habil-->
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input type="text" class="form-control input-lg" name="tiempoHabil" value="" required>
            </div>            
          </div>
          <!-- Fin de Tiempo habil -->

          

           



        </div>
      </div>

      <!-- Modal Pie -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Modificar Examen</button>
      </div>
      </form>

    </div>
  </div>
</div>