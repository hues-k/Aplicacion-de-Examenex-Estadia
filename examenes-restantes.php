<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar Examenes Restantes
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
        <li class="active">Administrar Examenes Restantes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">    
       <div class="box-header with-border">
          
        <h2>Test de Raven</h2>
        
          
        </div>   

        <div class="box-body">
            
        <table class="table table-bordered table-striped dt-responsive tablas">

          <thead>
                      
            <tr>
           <th >Id</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Puntuación</th>
              <th>Percil</th>
              <th>Grupo</th>
              <th>C.I.</th>
              <th>Acciones</th>
            </tr>
          </thead>

            <tbody>
              <?php


      $item = null;
      $valor = null;

      $testR = ControladorExamenesContestados::ctrRestantesE1($item, $valor);
      
      foreach ($testR as $key => $value) {
        echo ' <tr>
             <td>'.($key+1).'</td>

        <td>'.$value["Nombre"].'</td>

        
        <td>'.$value["Apellido"].'</td>
                <td>N/A</td>
                <td>N/A</td>
                <td>N/A</td>
                <td>N/A</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
              </tr>';
              }


              ?>
            </tbody>
          </table>
        </div>
      </div>

<!-- Examen 2 -->
       <div class="box">       

        <div class="box-body">
          <div class="box-header with-border">
          
        <h2>Test de Cleaven</h2>
        
          
        </div> 
            
        <table class="table table-bordered table-striped dt-responsive tablas">

          <thead>
                      
            <tr>
           <th style="width: 10px">Id</th>
              <th>Nombre</th>
              <th>Apellido</th>
              
              <th>Comentarios</th>
              <th>Acciones</th>
            </tr>
          </thead>
 
            <tbody>
              <?php


      $item = null;
      $valor = null;

      $testF = ControladorExamenesContestados::ctrRestantesE2($item, $valor);
      
      foreach ($testF as $key => $value) {
        echo '

              <tr>
                <td>'.($key+1).'</td>

        <td>'.$value["Nombre"].'</td>

        
        <td>'.$value["Apellido"].'</td>
         
                
                <td>Agregre un Comentarios</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
                </td>
              </tr>';
              }


              ?>
            </tbody>
          </table>
        </div>
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