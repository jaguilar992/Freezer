<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Administración</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/principal.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div id="sidebar" class="col-sm-3 col-md-3 col-lg-2 sidebar">
        <a href="../"><img src="../img/freezer.png" class="img-responsive" alt=""></a>
        <ul class="nav nav-sidebar" id="dashboard">
          <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-star"></span> Artistas</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-cd"></span> Álbumes</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-music"></span> Canciones</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-list"></span> Playlists</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Gestión de Usuarios</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Ajustes</a></li>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-3 col-lg-offset-2 main">
        <div class="container-fluid">
         <div class="row">
           <h1>Playlist</h1>
         </div>
          <hr>

          <div class="row">
            <div class="col-md-6">
            <form style="form-control">
              <table class="table table-striped" id="tbl-playlists">
                <thead>
                </thead>
                <tbody>
                  <tr style="display: none;">
                    <td>Codigo:</td>
                    <td><input type="text" name="txt-id-playlist" id="txt-id-playlist" class="form-control"></td>
                  </tr>
                  <tr>
                    <tr>
                    <td>Visibilidad:</td>
                    <td><select id="slc-tipo-visibilidad" class="form-control"></select></td>
                  </tr>
                  <tr>
                    <td>Playlist:</td>
                    <td><input type="text" name="txt-nombre-playlist" id="txt-nombre-playlist" class="form-control"></td>
                  </tr>           
                  <tr>
                    <td>Usuario:</td>
                    <td><select name="slc-nombre-usuario" id="slc-nombre-usuario" class="form-control"></select></td>
                  </tr>
                  <tr>
                    <td>URL foto playlist:</td>
                    <td><input type="text" name="txt-url-foto-playlist" id="txt-url-foto-playlist" class="form-control"></td>
                  </tr>
                </tbody>
              </table>
              <input type="button" name="btn-guardar-playlist" value="Guardar" class="btn btn-primary" id="btn-guardar-playlist">
              <input type="button" name="btn-actualizar-playlist" id="btn-actualizar-playlist" value="Actualizar" class="btn btn-info" style="display: none;">
              </form>
            </div>

            <div class="well col-md-12" id="div-playlists">
                <span class="glyphicon glyphicon-search" onclick="buscarPlaylist()"></span>&nbsp&nbsp&nbsp
                <input type="text" id="txt-busqueda" placeholder="Busqueda" style="border-radius:8px">
                <div id="div-busqueda">
                  <table id="tbl-busquedas" class="table table-striped">
                    <thead></thead>
                    <tbody>
                    </tbody>
                  </table>
                  
                </div>
                <table id="tbl-playlists" class="table table-striped">
                  <thead>
                    <th>Visibilidad</th>
                    <th>Playlist</th>
                    <th>Usuario</th>
                    <th>Url foto playlist</th>
                    <th></th>
                </thead>
                <tbody></tbody>
                </table>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/admin-playlist.js"></script>
</body>
</html>