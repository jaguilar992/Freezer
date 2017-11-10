<?php
	class Artista{
		private $idArtista;
		private $idPais;
		private $nombreArtista;
		private $biografia;
		private $urlFoto;

		public function __construct($idArtista=null,$idPais=null,$nombreArtista=null,$biografia=null,$urlFoto=null){
			$this->idArtista = $idArtista;
			$this->idPais = $idPais;
			$this->nombreArtista = $nombreArtista;
			$this->biografia = $biografia;
			$this->urlFoto = $urlFoto;
		}

		public function setIdArtista($idArtista) { 
			$this->idArtista = $idArtista; 
		}
		
		public function getIdArtista() { 
			return $this->idArtista; 
		}
		
		public function setIdPais($idPais) { 
			$this->idPais = $idPais; 
		}
		
		public function getIdPais() { 
			return $this->idPais; 
		}
		
		public function setNombreArtista($nombreArtista) { 
			$this->nombreArtista = $nombreArtista; 
		}
		
		public function getNombreArtista() { 
			return $this->nombreArtista; 
		}
		
		public function setBiografia($biografia) { 
			$this->biografia = $biografia; 
		}
		
		public function getBiografia() { 
			return $this->biografia; 
		}
		
		public function setUrlFoto($urlFoto) { 
			$this->urlFoto = $urlFoto; 
		}
		
		public function getUrlFoto() { 
			return $this->urlFoto; 
		}

		public function __toString(){
			return "IdArtista: " . $this->idArtista . 
				" IdPais: " . $this->idPais . 
				" NombreArtista: " . $this->nombreArtista . 
				" Biografia: " . $this->biografia . 
				" UrlFoto: " . $this->urlFoto;
		}

		#### LISTAR TODOS LOS ARTISTAS
		public static function listarTodos($conexion){
			# SIMILARES
		}

		#### SELECCIONAR REGISTRO DE ARTISTA POR CODIGO
		public function seleccionar($conexion){
			# SIMILARES
		}

		####  INSERTAR RESGISTRO DE ARTISTA
		####  return false or true ####  JSON
		public function insertarRegistro($conexion){
			$sql=sprintf("
				INSERT INTO tbl_artistas
				(id_pais, nombre_artista, biografia_artista, url_foto_artista)
				VALUES(%s, '%s', '%s', '%s');
				",
				$conexion->antiInyeccion($this->getIdPais()),
				$conexion->antiInyeccion($this->getNombreArtista()),
				$conexion->antiInyeccion($this->getBiografia()),
				$conexion->antiInyeccion($this->getUrlFoto())
			);
			$resultado=$conexion->ejecutarConsulta($sql);
			return json_encode($resultado);
		}
		
		#### LISTAR TODOS LOS ARTISTAS
		#	return objeto json con todos los ARTISTAS
		public static function listarTodos($conexion){
			$sql = "
				//SELECT 
				//FROM
				//ORDER BY ... ASC; // Opcional
			";

			$resultado = $conexion->ejecutarConsulta($sql);
			$objetos=array();
			while($fila=$conexion->obtenerFila($resultado)){
				$objeto = array();
				//$objeto["campo1"]= $fila["id"];
				// $objeto["campo2"]= $fila["id"]; //...

				$objetos[]=$objeto;
			}
			return json_encode($objetos);
		}
		#### SELECCIONAR REGISTRO DE ARTISTA POR CODIGO
		#	return objeto json con todos los ARTISTAS
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
		#### ACTUALIZAR REGISTRO ARTISTA
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
		#### ELIMINAR REGISTRO ARTISTAS
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