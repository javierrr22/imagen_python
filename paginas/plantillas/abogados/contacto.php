<!DOCTYPE html>
<html class="" lang="es">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->
<?php include 'head.php' ?>

<body>

    <!-- Navigation -->
    <?php include 'menu.php' ?>

    <!-- Page Content -->
<div class="container">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
    <h3>¡Contacta con Nosotros!</h3>
    <div class="row">
            <div class="form-group col-sm-6">
                <label for="name" class="h4">Nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Introducir Nombre" required>
            </div>
            <div class="form-group col-sm-6">
                <label for="email" class="h4">E-Mail</label>
                <input type="email" class="form-control" id="email" placeholder="Introducir email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="h4 ">Mensaje</label>
            <textarea id="message" class="form-control" rows="5" placeholder="Introduce tu mensaje" required></textarea>
        </div>
        <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Enviar</button>
<!--<div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>-->
</div>
</div>    
</div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
