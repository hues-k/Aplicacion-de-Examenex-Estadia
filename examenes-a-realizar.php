<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Examenes a Realizar
        
      </h1>
      <p class="lead">A continuacion se muestran los examenes a realizar</p>
        
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
        <li class="active">Examenes a Realizar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
              <div class="box">    
                <div class="box-body">

                    <div class="card text-center ">
                      <?php
                       $item = null;
                       $valor = null;

                       $prueba = ControladorExamenaRealizar::ctrMostrarExamenesaResponder($item,$valor);

                       foreach ($prueba as $key => $value) {
                        echo '
                         
                        <div class="card-body  text-center">
                           <h3 class="card-title">'.$value["NombreExamU"].'</h3>
                           <p class="card-text text-justify">A continuación se te mostrarán distintas placas, tendrás que decidir cuál es la figura que completa a cada una. El test consta de 60 placas, te recomendamos que lo hagas con tiempo. Para completar el test cuentas con 45 minutos, ellos son suficientes así que no te apures.  Al finalizar obtendrás tu coeficiente intelectual en base a los valores estadísticos para tu edad.</p>
                           <div class = "text-center">
                           <a href="Placa1" class="btn btn-primary">Empezar</a>
                            </div>
                        </div>
                      ';

                       }

                      ?>
                        
                  </div>
                    
                
                </div>
              </div>






<!-- Examen 2 -->
<!-- Default box -->
             <div class="box">    
                <div class="box-body">

                    <div class="card text-center">
                      <?php
                       $item = null;
                       $valor = null;

                       $prueba = ControladorExamenaRealizar::ctrMostrarExamenesaResponder2($item,$valor);

                       foreach ($prueba as $key => $value) {
                        echo '
                         
                        <div class="card-body ">
                           <h3 class="card-title">'.$value["NombreExamD"].'</h3>
                           <p class="card-text text-justify">Las palabras descriptivas que verá a continuación se encuentran agrupadas en series de cuatro, examine las palabras de cada serie y anote una columna "MAS" de la palabra que mejor describa su forma de ser o de comportarse. Después seleccione "MENOS" en la palabra que menos describa su forma de ser</p>
                           <div class = "text-center">
                           <a href="opcion01" class="btn btn-primary">Empezar</a>
                        </div>
                        </div>
                      ';

                       }

                      ?>
                        
                  </div>
                    
                
                </div>
              </div>

    </section>
    
  </div>


