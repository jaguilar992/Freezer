<?php
	include("class-persona.php");
	class Usuario extends Persona{
		private $idUsuario;
		private $idSuscripcion;
		private $idPais;
		private $usuario;
		private $urlFotoPerfil;
		private $tipoUsuario;

		public function __construct($nombre=null,$apellido=null,$sexo=null,$email=null,$contrasenia=null,$fechaNacimiento=null,$ultimaSesion=null,$idUsuario=null,$idSuscripcion=null,$idPais=null,$usuario=null,$urlFotoPerfil=null){
			parent::__construct($nombre,$apellido,$sexo,$email,$contrasenia,$fechaNacimiento,$ultimaSesion);
			$this->idUsuario = $idUsuario;
			$this->idSuscripcion = $idSuscripcion;
			$this->idPais = $idPais;
			$this->usuario = $usuario;
			$this->urlFotoPerfil = $urlFotoPerfil;
		}

		function setIdUsuario($idUsuario) { $this->idUsuario = $idUsuario; }
		function getIdUsuario() { return $this->idUsuario; }
		function setIdSuscripcion($idSuscripcion) { $this->idSuscripcion = $idSuscripcion; }
		function getIdSuscripcion() { return $this->idSuscripcion; }
		function setIdPais($idPais) { $this->idPais = $idPais; }
		function getIdPais() { return $this->idPais; }
		function setUsuario($usuario) { $this->usuario = $usuario; }
		function getUsuario() { return $this->usuario; }
		function setUrlFotoPerfil($urlFotoPerfil) { $this->urlFotoPerfil = $urlFotoPerfil; }
		function getUrlFotoPerfil() { return $this->urlFotoPerfil; }
		function getTipoUsuario(){return $this.tipoUsuario}
		function setTipoUsuario($tipoUsuario){$this->tipoUsuario=$tipoUsuario;}

		public function __toString(){
			return parent::__toString." idUsuario: ".$this->idUsuario." idSuscripcion: ".$this->idSuscripcion." idPais: ".$this->idPais." Usuario: ".$this->usuario." urlFotoPerfil: ".$this->urlFotoPerfil;
		}
		public static function verificarUsuario($objConexion,$email,$password){
			echo "Verificando en la base";
		}

		#### LISTAR TODOS LOS USUARIOS
		#	return objeto json con todos los USUARIOS
		public static function listarTodos($conexion){
			$sql = "
				//SELECT 
				//FROM
				//ORDER BY ... ASC; // Opcional
			";

			$resultado = $conexion->ejecutarConsulta($sql);
			$objetos=array(); // Renombrar
			while($fila=$conexion->obtenerFila($resultado)){
				$objeto = array(); //Renombrar
				//$objeto["campo1"]= $fila["id"];
				// $objeto["campo2"]= $fila["id"]; //...

				$objetos[]=$objeto;
			}
			return json_encode($objetos);
		}

		#### SELECCIONAR REGISTRO DE USUARIO POR CODIGO
		#	return objeto json con todos los USUARIOS
		public function seleccionar($conexion){
			$resultado=$conexion->ejecutarConsulta(sprintf("
				//SELECT
				//FROM
				//WHERE
				",
				//$conexion->antiInyeccion($this->getIdGenero())
			));
			$fila=$conexion->obtenerFila($resultado);
			return json_encode($fila);
		}

		####  INSERTAR RESGISTRO DE USUARIO
		#     return false or true ####  JSON
		public function insertarRegistro($conexion){
			$sql=sprintf("
				//INSERT INTO
				//()
				//VALUES();
				",
				//$conexion->antiInyeccion($this->get...),
			);
			$resultado=$conexion->ejecutarConsulta($sql);
			return json_encode($resultado);
		}


		#### ACTUALIZAR REGISTRO USUARIO
		#     return false or true ####  JSON
		public static function actualizarRegistro($conexion){
			$sql=sprintf("
				//UPDATE
				//... = ...
				//WHERE
			",
				//$conexion->antiInyeccion($this->getNombreGenero()),
			);
			$resultado=$conexion->ejecutarConsulta($sql);
			return json_encode($resultado);
		}
		#### ELIMINAR REGISTRO USUARIOS
		#     return false or true ####  JSON
		public static function eliminarRegistro($conexion, $id){
			$sql = sprintf("
				//DELETE FROM 
				//WHERE
			",
				$conexion->antiInyeccion($id)
			);
			$resultado=$conexion->ejecutarConsulta($sql);
			return json_encode($resultado);
		}


	}
	
?>