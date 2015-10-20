<?php
class usuario
{
	public $id;
	public $correo; //correo
	public $clave;
	public $nombre;
	public $tipo;


	 public function InsertarUsuario()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("CALL InsertarUsuario(:usuario,:clave,:nombre,:tipo)");
				$consulta->bindvalue(':usuario',$this->correo,PDO::PARAM_STR); //correo
				$consulta->bindvalue(':clave',$this->clave,PDO::PARAM_STR);
				$consulta->bindvalue(':nombre',$this->nombre,PDO::PARAM_STR);
				$consulta->bindvalue(':tipo',$this->tipo,PDO::PARAM_STR);
				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }
	public function BorrarUsuario()
	 {
	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL BorrarUsuario(:id)");	
				$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();
	 } 
	 public function ModificarUsuario()
	 {
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL ModificarUsuario(:nombre,:id)");
			//$consulta->bindvalue(':usuario',$this->usuario,PDO::PARAM_STR); //correo
			//$consulta->bindvalue(':clave',$this->clave,PDO::PARAM_STR);
			$consulta->bindvalue(':nombre',$this->nombre,PDO::PARAM_STR);
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
			return $consulta->execute();
			return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	public function GuardarUsuario()
	 {

	 	if($this->id>0)
	 		{
	 			$this->ModificarUsuario();
	 		}else {
	 			$this->InsertarUsuario();
	 		}

	 }
	
	public static function TraerUsuarios()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUsuarios()");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario");		
	}

	public static function TraerUsuariosId($id) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUsuariosId(:id)");
			$consulta->bindvalue(':id',$id,PDO::PARAM_INT);
			$consulta->execute();
			$buscado= $consulta->fetchObject('usuario');
			return $buscado;			

	}
	public static function validarLogin($correo,$clave)
	{
		//require_once("AccesoDatos.php");
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta=$objetoAccesoDato->RetornarConsulta("CALL validarLogin(:correo,:clave)");
		$consulta->bindvalue(':correo',$correo,PDO::PARAM_STR);
		$consulta->bindvalue(':clave',$clave,PDO::PARAM_STR);
		$consulta->execute();
		$buscado=$consulta->fetchObject('usuario');
		return $buscado;
	}

}
?>