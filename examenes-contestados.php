<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Administrar Examenes Contestados
      
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Examenes Contestados</li>
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
           <th style="width: 10px">Id</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Puntuación</th>
            <th>Edad</th>
           <th>Percentil</th>
           <th>Grupo</th>
           <th>C.I.</th>
           <th>Acciones</th>
         </tr>
       </thead>

       <tbody>
        <?php
        $item = null;
        $valor = null;

        $exam = ControladorExamenesContestados::ctrResultadosO($item, $valor);
        foreach ($exam as $key => $value) {
          
       echo '
        <tr>
          <td>'.($key+1).'</td>';
          $itemEmleado = "IdUsuario";
        $valorEmpleado = $value["IdUsuario"];
        $p =  $value["TotalCorrecta"];
       

        $respuestaEmplead = ControladorUsuarios::ctrMostrarUsuarios( $itemEmleado, $valorEmpleado);
        echo '
       
          <td>'.$respuestaEmplead["Nombre"].'</td>
          <td>'.$respuestaEmplead["Apellido"].'</td>';
         
         
         
          echo '
          <td>'.$value["TotalCorrecta"].'</td>
          <td>'.$value["EdadU"].'</td>';


         
          
           // $calificacion = ControladorExamenesContestados::ctrResultadosF(  $p);


           

           echo '
          <td>'.$value["Percentil"].'</td>
          <td>'.$value["Rango"].'</td>
          <td>'.$value["Diagnostico"].'</td>
          <td>
            <div class="btn-group">
              

              <button class="btn btn-danger btnEliminarRaven" idUsuario="'.$value["IdUsuario"].'"><i class="fa fa-times"></i></button>
            </div>
          </td>
        </tr>';
         }


        ?>
      </tbody>
    </table>
  </div>
</div>
<?php
$a = new ControladorExamenesContestados();
$a -> ctrEliminarRaven();
?>
<!--=============================== Examen 2 ================================================-->
<div class="box">       

  <div class="box-body">
    <div class="box-header with-border">
      
      <h2>Test de Cleaven</h2>
      
      
    </div> 
    
    <table class="table table-bordered table-striped dt-responsive tablas text-justify">

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

      $test = ControladorExamenesContestados::ctrMostrarResE2($item, $valor);
      foreach ($test as $key => $value) {

        echo '<tr>
        <td>'.($key+1).'</td>';

        $itemEmleado = "IdUsuario";
        $valorEmpleado = $value["IdUsuario"];

        $respuestaEmpleado = ControladorUsuarios::ctrMostrarUsuarios( $itemEmleado, $valorEmpleado);
        echo '

        <td>'.$respuestaEmpleado["Nombre"].'</td>

        
        <td>'.$respuestaEmpleado["Apellido"].'</td>';
         
     

        
        
        

        $respuestaComentario = ControladorExamenesContestados::ctrMostrarComentario($itemEmleado,$valorEmpleado);

      

       
         echo '
        <td>'.$respuestaComentario["Mensaje"].'</td>





         <td>
         <div class="btn-group">

         <button class="btn btn-info btnVerRespuestas " idUsuario="'.$value["IdUsuario"].'"><i class="fa fa-eye"></i></button>

         <button class="btn btn-danger btnEliminarRespuestas" idUsuario="'.$value["IdUsuario"].'"><i class="fa fa-times"></i></button>
         </div>
         </td>
         </tr> ';}

         ?>

       </tbody>
     </table>
   </div>
 </div>


</section>

</div>


<?php
$borrarRespuesta = new ControladorExamenesContestados();

$borrarRespuesta-> ctrBorrarRespuestas();
?>
