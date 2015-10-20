<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'mostrarLogin':
			include("partes/login.php");
		break;
		case 'registrar':
			include("partes/registrar.php");
		break;
	case 'mostrarDatos':
			include("partes/formDatos.php");
		break;
	case 'mostrarListado':
			include("partes/formListado.php");
		break;
	case 'BorrarUsuario':
			$usuario = new usuario();
			$usuario->id=$_POST['id'];
			$cantidad=$usuario->BorrarUsuario();
			echo $cantidad;
	break;
	case 'GuardarUsuario':
			$usuario = new usuario();
			$usuario->id=$_POST['id'];
			$usuario->correo=$_POST['correo'];
			$usuario->clave=$_POST['clave'];
			$usuario->nombre=$_POST['nombre'];
			$tipo->tipo=$_POST['tipo'];

			$cantidad=$usuario->GuardarUsuario();
			echo $cantidad;
	break;
	case 'Traerusuarios':
			//$usuario = usuario::TraerUnusuario($_POST['id']);	
			$usuario=usuario::TraerUsuarios();	
			echo json_encode($usuario) ;

	break;
	case 'TraerUsuariosId':
		$usuario = usuario::TraerUsuariosId($_POST['id']);	 
		echo json_encode($usuario);
	break;
	default:
		# code...
		break;
}

 ?>