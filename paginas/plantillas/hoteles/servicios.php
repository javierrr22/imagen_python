<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?> 
<body>

    <!-- Navigation -->
    

    <!-- Half Page Image Background Carousel Header -->
 <?php include 'header.php' ?>

    <!-- Page Content -->
    <div class="container">


    <div class="row top-buffer">
        <div class="col-md-4">
            <p class="centraTexto">

            <i class="fa fa-cutlery fa-3x"></i> <h3 class="centraTexto">Restaurante</h3>

            </p>

        </div>
        <div class="col-md-4">
                <p class="centraTexto"><i class="fa fa-car fa-3x"></i><h3 class="centraTexto">Parking Vigilado</h3>

            </p>
            
        </div>
        <div class="col-md-4">
            <p class="centraTexto"><i class="fa fa-coffee fa-3x"></i><h3 class="centraTexto">Cafetería</h3>

            </p>
            
        </div>
    </div>
     <div class="row top-buffer">
        <div class="col-md-4">
            <p class="centraTexto">
            <i class="fa fa-wifi fa-3x"></i> <h3 class="centraTexto">Wifi Gratuito</h3>

            </p>

        </div>
        <div class="col-md-4">
                <p class="centraTexto"><i class="fa fa-television fa-3x"></i><h3 class="centraTexto">TV</h3>

            </p>
            
        </div>
        <div class="col-md-4">
            <p class="centraTexto"><i class="fa fa-wheelchair fa-3x"></i><h3 class="centraTexto">Acceso Minusválidos</h3>

            </p>
            
        </div>
    </div>

        <!-- Footer -->
       <?php include 'footer.php' ?>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
