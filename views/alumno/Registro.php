<?php 
	include ('../layouts/header.php');
 ?>

 <div class="row">
  <div class="col-xs-6 col-sm-3">Cosa que va a un costado</div>
  <div class="col-xs-12 col-sm-6 col-md-5">
  <h1>Registro de estudiantes</h1>
  <hr>
  		<form class="form-horizontal" action="">
  			<div class="form-group">
	  			<label class="col-sm-3 control-label">Nombre:</label>
	  			<div class="col-sm-9">
	  				<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
	  			</div>
	  		</div>
	  		<div class="form-group">
	  			<label class="col-sm-3 control-label">Edad:</label>
	  			<div class="col-sm-9">
	  				<input type="text" class="form-control" name="edad" id="edad" placeholder="Edad">
	  			</div>
	  		</div>
	  		<div class="form-group">
	  			<label class="col-sm-3 control-label">Carrera:</label>
	  			<div class="col-sm-9">
		  			<select name="carrera" id="carrera" class="form-control">
		  				<option value="Opcion" selected>Elije una carrera</option>
		  				<option value="Opcion">Sistemas computacionales/informática</option>
		  				<option value="Opcion">Gestión de empresas</option>
		  				<option value="Opcion">Industrial</option>
		  				<option value="Opcion">Química</option>
		  			</select>
	  			</div>
	  		</div>
	  		<div class="form-group">
	  			<label class="col-sm-3 control-label">Institución:</label>
	  			<div class="col-sm-9">
	  				<input type="text"  class="form-control" name="institucion" id="institucion" placeholder="Institucion">
	  			</div>
	  		</div>
	  		<div class="form-group">
	  			<label class="col-sm-3 control-label">Teléfono:</label>
	  			<div class="col-sm-9">
	  				<input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
	  			</div>
	  		</div>
	  		<div class="form-group">
	  			<label class="col-sm-3 control-label">Correo:</label>
	  			<div class="col-sm-9">
	  				<input type="text" class="form-control" name="correo" id="correo" placeholder="Correo">
	  			</div>
	  		</div>
	  		<div class="form-group">
	  			<label class="col-sm-3 control-label">Usuario:</label>
	  			<div class="col-sm-9">
	  				<input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
	  			</div>
				</div>
				<div class="form-group">
	  			<label class="col-sm-3 control-label">Contraseña:</label>
	  			<div class="col-sm-9">
	  				<input type="password" class="form-control" name="password" id="institucion" placeholder="Contraseña">
	  			</div>
	  		</div>
	  		<div class="form-group">
	  			<label class="col-sm-3 control-label">Fotogragía:</label>
	  			<div class="col-sm-9">
	  				<input type="file" name="" id="Archivo">
	  			</div>
	  		</div>
	  		<div class="form-group text-right">
	  			<input type="submit" class="btn btn-default" value="registrar">
	  		</div>
  		</form>
  </div>
</div>
