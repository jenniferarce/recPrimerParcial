<?php 
session_start();
if(isset($_SESSION['registrado']))
{
	require_once("clases/AccesoDatos.php");
	require_once("clases/usuario.php");
	$arrayDeUsuarios=usuario::TraerUsuarios();
	echo "<h2> Bienvenido: ". $_SESSION['registrado']."</h2>";

 ?>
<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>Correo</th><th>Nombre</th><th>Tipo</th>
		</tr>
	</thead>
	<tbody>

		<?php 
		
foreach ($arrayDeUsuarios as $usuario) {
	echo"<tr>
			<td><a onclick='EditarUsuario($usuario->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='BorrarUsuario($usuario->id)' class='btn btn-danger'> <span class='glyphicon glyphicon-trash'>&nbsp;</span> Borrar</a></td>
			<td>$usuario->correo</td>
			<td>$usuario->nombre</td>
			<td>$usuario->tipo</td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>

<?php 	}else	{
		echo "<h4 class='widgettitle'>No estas registrado</h4>";
	}

	 ?>