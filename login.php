<div id="back"></div>

<div class="login-box">
  <div class="login-logo">

   <img src="Vista/imagenes/plantilla/logocbt2.png" class="img-responsive" border="1" solid="#122235" style="padding: 30px 100px 0px 100px ">

  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <p class="login-box-msg">Ingresa al sistema</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        

        <!-- /.col -->
        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>

        </div>
       
      </div>
      <?php
      $login = new ControladorUsuarios();
      $login -> ctrIngresoUsuario();
      ?>

    </form>

    

   

  </div>
 
</div>
