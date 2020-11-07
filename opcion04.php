<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!--pagina4-->
           <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        4
        
      </h1>
      <h3>Seleccina una casilla de lo mas y lo menos que describe tu forma de ser</h3>
    </section>

    <!-- Main content -->
    <section class="content">
      <form method="post" action="opcion05">

      <!-- Default box -->
      <div class="box">
        <div class="col-md-12">
                <table class="table table-hover table-bordered table-striped dt-responsive ">
                  <thead>
                    <tr>
                      <th>¿Como te consideras?</th>
                      <th>Mas</th>
                      <th>Menos</th>                
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>Aventurero</th>
                      <td><input type="radio" name="resMas" id="option1" value="Aventurero">  </td>
                      <td><input type="radio" name="resMenos" id="option5" value="Aventurero"></td>
                      
                    </tr>
                    <tr>
                      <th>Receptivo</th>
                      <td><input type="radio" name="resMas" id="option2" value="Receptivo"></td>
                      <td><input type="radio" name="resMenos" id="option6" value="Receptivo"></td>
                     
                    </tr>
                    <tr>
                      <th>Cordial</th>
                      <td><input type="radio" name="resMas" id="option3" value="Cordial"></td>
                      <td><input type="radio" name="resMenos" id="option7" value="Cordial"></td>
                    </tr>
                    <tr>
                      <th>Moderado</th>
                      <td><input type="radio" name="resMas" id="option4" value="Moderado"></td>
                      <td><input type="radio" name="resMenos" id="option8" value="Moderado"></td>
                    </tr>
                  </tbody>
                 <!-- äca esta las id de las llave forane para el examen y el usuario -->
                  <input type="hidden" name="idExamen" value="2"> 

                  <input type="hidden" name="idusuario" value="<?php
                  echo $_SESSION["id"];

                  ?>">

                </table>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>            
            </div>


          </form>
         
      </div>
       <?php
            $prueba = new ControladorExamenaRealizar();
            $prueba -> ctrGuardarRespuesta();
            ?>

     <!-- poner el id y de usuarios  -->


    </section>
    
  </div>
  
 