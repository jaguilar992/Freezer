<?php
	include("../class/class-conexion.php");
	include("../class/class-usuario.php");
	session_start();
	if(isset($_POST["accion"])){
		$conexion = new Conexion;
		switch ($_POST['accion']) {
			switch ($_POST['accion']) {
			case 'actualizar-datos': 
					$usuario=new Usuario(

						$_SESSION['id_usuario'],
						$_SESSION['id_suscripcion'],
						$_SESSION['id_pais'],
						$_POST['usuario'],
						$_POST['nombre'],
						$_POST['apellido'],
						$_SESSION['sexo'],
						$_POST['email'],
						$_POST['contrasenia'],
						$_SESSION['url_foto_perfil'],
						$_SESSION['fecha_nacimiento'],
						$_SESSION['url_foto_perfil'],
						$_SESSION['tipo_usuario']

						);
					$usuario->actualizarRegistro($conexion);
			break;
			case 'insertar-registro': 
				$usuario = new Usuario();
				$usuario->setIdPais($_POST["id_pais"]);
				$usuario->setUsuario($_POST["usuario"]);
				$usuario->setNombre($_POST["nombre"]);
				$usuario->setApellido($_POST["apellido"]);
				$usuario->setSexo($_POST["sexo"]);
				$usuario->setEmail($_POST["email"]);
				$usuario->setContrasenia($_POST["contrasenia"]);
				$usuario->setFechaNacimiento($_POST["fecha_nacimiento"]);
				$usuario->setUrlFotoPerfil($_POST["url_foto_perfil"]);
				$usuario->setTipoUsuario($_POST["id_tipo_usuario"]);
				$respuesta=$usuario->insertarRegistro($conexion);
				echo json_encode($respuesta);
			case 'obtener-datos-usuario':
				Usuario::obtenerDatosUsuario($conexion,$_SESSION['id_usuario']);
				break;
			default:
				echo json_encode("Petición inválida");
				break;
			break;

		}
		$conexion->cerrarConexion();
	}else{
		echo json_encode("No se especificó petición");
	}
?>
