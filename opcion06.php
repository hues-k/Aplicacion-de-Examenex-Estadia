<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!--pagina6-->
        <div class="content-wrapper">
         <section class="content-header">
      <h1>
        6
        
      </h1>
      <h3>Seleccina una casilla de lo mas y lo menos que describe tu forma de ser</h3>
    </section>

    <!-- Main content -->
    <section class="content">
      <form method="post" action="opcion07">

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
                      <th>Confiado</th>
                      <td><input type="radio" name="resMas" id="option1" value="Confiado">  </td>
                      <td><input type="radio" name="resMenos" id="option5" value="Confiado"></td>
                      
                    </tr>
                    <tr>
                      <th>Simpatizador</th>
                      <td><input type="radio" name="resMas" id="option2" value="Simpatizador"></td>
                      <td><input type="radio" name="resMenos" id="option6" value="Simpatizador"></td>
                     
                    </tr>
                    <tr>
                      <th>Tolerante</th>
                      <td><input type="radio" name="resMas" id="option3" value="Tolerante"></td>
                      <td><input type="radio" name="resMenos" id="option7" value="Tolerante"></td>
                    </tr>
                    <tr>
                      <th>Afirmativo</th>
                      <td><input type="radio" name="resMas" id="option4" value="Afirmativo"></td>
                      <td><input type="radio" name="resMenos" id="option8" value="Afirmativo"></td>
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
  
 