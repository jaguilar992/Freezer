<?php
	include("../class/class-conexion.php");
	include("../class/class-artista.php");
	if(isset($_POST["accion"])){
		$conexion = new Conexion;
		switch ($_POST['accion']) {
			##################################### ARTISTA
			case 'listar-todos':
				$respuesta = Artista::listarTodos($conexion);
				echo json_encode($respuesta);
			break;
			case 'insertar-registro': 
				$artista = new Artista();
				$artista->setIdPais($_POST["id_pais"]);
				$artista->setNombreArtista($_POST["nombre_artista"]);
				$artista->setBiografia($_POST["biografia_artista"]);
				$artista->setUrlFoto($_POST["url_foto_artista"]);
				$resultado = $artista->insertarRegistro($conexion);
				echo json_encode($resultado); // FORMATO JSON
			break;
			case "seleccionar":
				$artista = new Artista();
				$artista->setIdArtista($_POST["id_artista"]);
				$respuesta = $artista->seleccionar($conexion);
				echo json_encode($respuesta);
			break;
			case "actualizar-registro":
				$artista = new Artista();
				$artista->setIdArtista($_POST["id_artista"]);
				$artista->setIdPais($_POST["id_pais"]);
				$artista->setNombreArtista($_POST["nombre_artista"]);
				$artista->setBiografia($_POST["biografia_artista"]);
				$artista->setUrlFoto($_POST["url_foto_artista"]);
				echo $artista;
				$respuesta = $artista->actualizarRegistro($conexion);
				echo json_encode($respuesta);
			break;
			case "eliminar-registro":
				$respuesta = Artista::eliminarRegistro($conexion, $_POST["id_artista"]);
				echo json_encode($respuesta);
			break;
			default:
				echo json_encode("Petición inválida");
				break;
		}
		$conexion->cerrarConexion();
	}else{
		echo json_encode("No se especificó petición");
	}
?>
