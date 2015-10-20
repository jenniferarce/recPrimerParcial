<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

<?php 
 
session_start();
if(!isset($_SESSION['registrado'])){  ?>
    <div id="formLogin" class="container">

      <form  class="form-ingreso " onsubmit="validarLogin();return false;">
        <h2 class="form-ingreso-heading">Ingrese sus datos</h2>

        <input type="email" name="correo" id="correo" class="form-control" placeholder="example@example.com" title="Ingrese un correo valido">
          <input type="password" name="clave" id="clave" class="form-control" placeholder="contraseña">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
        
      </form>

    </div> <!-- /container -->

  <?php }else{    echo"<h3>usted '".$_SESSION['registrado']."' esta logeado. </h3>";?>         
    <button onclick="logout()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Deslogearme</button>
 <script type="text/javascript">
 </script>
<?php  

}  ?>