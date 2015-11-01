<?php
include ('../layouts/header.php');
?>
<BR><BR>
<div class="row">
  <div class="col-md-3">

  </div>
  <div class="col-md-5">
    <h1>Registro de empresas</h1>
    <HR>
      <BR>
    <form class="form-horizontal" action="index.html" method="post">
      <div class="form-group">
        <label class="control-label col-md-3"for="">Nombre de la empresa</label>
        <div class="col-md-9">
          <input type="text" class="form-control" id="nomEmpresa" placeholder="" name="nomEmpresa">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3"for="">RFC:</label>
        <div class="col-md-9">
          <input type="text" class="form-control" id="nomEmpresa" placeholder="" name="nomEmpresa">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3"for="">Razon Social:</label>
        <div class="col-md-9">
          <input type="text" class="form-control" id="RS" placeholder="" name="RS">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3"for="">Correo:</label>
        <div class="col-md-9">
          <input type="text" class="form-control" id="nomEmpresa" placeholder="" name="correoEmp">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3"for="">Usuario:</label>
        <div class="col-md-9">
          <input type="text" class="form-control" id="usuarioemp" placeholder="" name="usuarioEmp">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3"for="">Password:</label>
        <div class="col-md-9">
          <input type="passsword" class="form-control" id="passemp" placeholder="" name="passEmp">
        </div>
      </div>
      <button type="submit" class="col-md-offset-11 btn btn-default">Registrar</button>
    </form>
  </div>

</div>
