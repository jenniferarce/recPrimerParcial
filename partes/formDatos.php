<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

<?php 
session_start();
if(isset($_SESSION['registrado'])){  ?>
    <div id="formDatos" class="container">

      <form class="form-ingreso" onsubmit="GuardarUsuario();return false">
        <h2 class="form-ingreso-heading">Datos</h2>
        <input type="text"  maxlength="50" id="nombre" title="Se necesita un nombre de nombre" class="form-control" placeholder="Nombre" required autofocus>

         <select name="tipo" id="tipo" class="form-control">
          <option selected value="admin">admin</option>
          <option value="user">user</option>
         </select><br>

        <input readonly type="hidden"  id="id" class="form-control" >
        <input readonly type="hidden" id="correo" class="form-control" value="<?php echo $_SESSION['registrado'];?>">
         <input readonly type="hidden" id="clave" class="form-control" value="<?php echo $_POST['clave'];?>">

        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar</button>
     
      </form>

    </div> <!-- /container -->

  <?php }else{    echo"<h3>usted no esta logeado. </h3>";?>         
   
  <?php  }  ?>