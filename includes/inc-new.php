<form class="form-horizontal" action="actions/new.act.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Nuevo Usuario</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-6">
  <input id="nombre" name="nombre" type="text" placeholder="Nombre Usuario" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>  
  <div class="col-md-6">
  <input id="email" name="email" type="text" placeholder="Correo Electronico" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-6">
    <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="-0">
      <input type="checkbox" name="enabled" id="enabled">
      activar
    </label>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="enviar" name="enviar" class="btn btn-success">Crear Usuario</button>
  </div>
  
</div>

</fieldset>
</form>
