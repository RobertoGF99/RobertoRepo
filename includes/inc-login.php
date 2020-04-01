<div>
    <form class="form-horizontal" action="actions/login.act.php"method="post">
        <fieldset>

            <!-- Form Name -->
        <legend>Registro Usuario</legend>

            <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email"></label>  
            <div class="col-md-6">
                <input id="email" name="email" type="text" placeholder="Correo Electronico" class="form-control input-md">    
            </div>
        </div>

            <!-- Password input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-6">
                <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control input-md" >
                
            </div>
        </div>

            <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-4">
                <button id="enviar" name="enviar" class="btn btn-success" type="submit">Enviar</button>
            </div>
        </div>

            <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-4">
                <a  class="btn btn-primary" href="./registro.php?page=new">Nuevo Usuario</a>
            </div>
        </div>

        </fieldset>
    </form>
</div>