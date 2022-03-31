
<form class="form-horizontal marginTop200" role="form" method="post" action="index.php">
<h1 class="centraTexto">¡Envíanos un mail!</h1>
<br >
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label"><i class="fa fa-user fa-2x"></i></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre y Apellido" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label"><i class="fa fa-envelope fa-2x"></i></label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@dominio.com" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label"><i class="fa fa-envelope-o fa-2x"></i></label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message" placeholder="Mensaje"></textarea>
        </div>
    </div>
   
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>

