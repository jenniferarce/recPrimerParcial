<?php
session_start(); 
require_once("../clases/AccesoDatos.php");
require_once("../clases/usuario.php");

$correo=$_POST['correo'];
$clave=$_POST['clave'];

$retorno;
if(usuario::validarLogin($_POST['correo'],$_POST['clave']))
{
	$_SESSION['registrado']=$correo;
	//$sesion=$correo;
	//$sesion=$clave;
	//var_dump($sesion);

	$retorno=$correo;
}else
{
		$retorno= "No-esta";

}
echo $retorno;
?>