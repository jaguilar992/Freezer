<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Administración</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/principal.css">
  <link rel="stylesheet" href="../css/jquery-confirm.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div id="sidebar" class="col-sm-3 col-md-3 col-lg-2 sidebar">
        <a href="../"><img src="../img/freezer.png" class="img-responsive" alt=""></a>
        <ul class="nav nav-sidebar" id="dashboard">
          <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
          <li><a href="artista.php"><span class="glyphicon glyphicon-star"></span> Artistas</a></li>
          <li class="active"><a href="album.php"><span class="glyphicon glyphicon-cd"></span> Álbumes</a></li>
          <li><a href="cancion.php"><span class="glyphicon glyphicon-music"></span> Canciones</a></li>
          <li><a href="playlist.php"><span class="glyphicon glyphicon-list"></span> Playlists</a></li>
          <li><a href="idioma.php"><span class="glyphicon glyphicon-text-width"></span> Idiomas</a></li>
            <li><a href="paises.php"><span class="glyphicon glyphicon-screenshot"></span>Paises</a></li>
          <li><a href="tipo-suscripcion.php"><span class="glyphicon glyphicon-eye-open"></span>Tipos de suscripcion</a></li>
         <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Gestión de Usuarios</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Ajustes</a></li> -->
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-3 col-lg-offset-2 main">
        <div class="container-fluid">
         <div class="row">
           
           <h1>Álbumes</h1>
           <hr>
           
           <div class="col-md-12">
              <h3>Agregar Álbum</h3>
              <table class="table table-striped">
                <tr>
                  <td>Fotografía: </td>
                  <td>
                    <input type="hidden" id="txt-url-foto-album">
                    <form method="post" id="form-foto-album" name="form-foto-album" enctype="multipart/form-data">
                      <label class="btn btn-default">
                          Examinar <input type="file" name="file" id="file-foto-album" hidden>
                      </label>
                      <img src="../img/load.gif" id="carga-foto-album" class="img loading" height="20px">
                      <img src="../img/good.png" id="lista-carga-foto-album" class="img loading" height="20px">
                    </form>
                  </td>
                </tr>
                <tr>
                	<td>Artista: </td>
                	<td>
                		<select name="slc-artista" id="slc-artista" class="form-control" placeholder="Seleccionar">
                			<option value="" hidden="">Seleccionar</option>
                		</select>
                	</td>
                </tr>
                <tr>
                  <td>Nombre del álbum: </td>
                  <td><input type="text" id="txt-nombre-album" id="txt-album" value="" placeholder="Nombre" class="form form-control"></td>
                </tr>
                <tr>
                  <td>Año: </td>
                  <td>
                    <input class="form-control" type="date" name="txt-fecha" id="txt-fecha">
                  </td>
                </tr>
                <tr>
                  <td>
                    <button id="btn-guardar-album" type="button" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar</button>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="../js/soundmanager2.min.js"></script>
  <script type="text/javascript" src="../js/player.js"></script>
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/jquery-confirm.min.js"></script>
  <script type="text/javascript" src="../js/navigation.js"></script>
  <script type="text/javascript" src="../js/admin-album.js"></script>
</body>
</html>
