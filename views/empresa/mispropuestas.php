
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/rightContact/config.ini.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>RightBind</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../bootstrap/js/jquery.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
    </head>
<body>
<div class="container-fluid">
  <nav class="navbar navbar-default navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#targ" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div class="collapse navbar-collapse" id="targ">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo BASEURL;?>views/site/inicio.php">Inicio</a></li>
            <li><a href="<?php echo BASEURL;?>views/empresa/panelEmpresa.php">Perfil</a></li>
            <li><a href="<?php echo BASEURL;?>views/empresa/mispropuestas.php">Mis Propuestas</a></li>
            <li><a href="<?php echo BASEURL;?>views/empresa/buscar_perfiles.php">Buscar Proyectos</a></li>
            <li><a href="<?php echo BASEURL;?>views/empresa/misPostulaciones.php">Mis postulaciones</a></li>
          </ul>
          <?php
          if(!isset($_SESSION['nombre'])){
           ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo BASEURL; ?>views/site/login.php"><span class="icon-off"></span></a></li>
          </ul>
          <?php
        }else {?>
        <ul class="nav navbar-nav navbar-right">
        <?php
          if($_SESSION['admin']=='isAdmin'){?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <p class="navbar-text"><?php echo trim($_SESSION['nombre'])?></p>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo BASEURL; ?>views/admin/Empleados.php"><span class="icon-off"></span>Lista de Empleados</a></li>
                <li><a href="<?php echo BASEURL; ?>views/admin/agregaEmpleado.php"><span class="icon-off"></span>Agregar Empleado</a></li>
                <li><a href="<?php echo BASEURL; ?>views/admin/Lenguajes.php"><span class="icon-off"></span>Lista de Lenguajes</a></li>
                <li><a href="<?php echo BASEURL; ?>views/admin/agregaLenguaje.php"><span class="icon-off"></span>Agregar Lenguaje</a></li>
              </ul>
            </li>
        <?php
      }else{?>
        <p class="navbar-text"><?php echo $_SESSION['nombre']?></p>
      <?php  }?>
      <li><a href="<?php echo BASEURL; ?>views/site/cerrarSesion.php"><span class="icon-off"></span>Cerrar sesión</a></li>
      </ul>
      <?php
        }
        ?>
        </div>
      </div>
  </nav>

<BR><BR><BR>

<div class="row">
  <div class="col-md-offset-4 col-md-6">
    <h1>Mis propuestas</h1>
    <BR>
    <div class="row">
      <div class="col-md-12">
        <div class="row" style="border-top: 1px solid #f0ad4e; border-bottom: 1px solid #f0ad4e; ">
          <div class="col-md-8">
            <h2>Desarrollo de Sistema de informacion</h2>
            <p>Necesitamos un SI que pueda ser utilizado a travez de un navegador web
              y nos permita el acceso desde cualquier parte del mundo.
            Requerimientos: Base de datos en PosgreSql, Tecnologias AJAX, utilizar el framework Symphony2</p>
          </div>
          <div class="col-md-4 text-center">
            <P><b>Postulantes</b></p>
              <h2>#10</h2>
            <button class="btn btn-success" style="margin-top=40px">&nbsp; &nbsp;<b>Ver</b> &nbsp; &nbsp;</button>
        </div>

        </div>
      </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="row" style="border-top: 1px solid #f0ad4e; border-bottom: 1px solid #f0ad4e; ">
            <div class="col-md-8">
              <h2>Implementar programa de 5's</h2>
              <p>Aplicar un programa de 5's a nivel organización</p>
            </div>
            <div class="col-md-4 text-center">
              <P><b>Postulantes</b></p>
                <h2>#5</h2>
              <button class="btn btn-success" style="margin-top=40px">&nbsp; &nbsp;<b>Ver</b> &nbsp; &nbsp;</button>
          </div>

          </div>
          </div>
        </div>

    </div>
  </div>
</div>
