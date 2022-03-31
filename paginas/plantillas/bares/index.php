<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>

<body>

 <?php include 'header.php' ?>

    <div class="container">

      <?php include 'fila-slider.php' ?>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>¡Ven a Conocernos!</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>La historia de nuestra cafetería se remonta a los años 80. Justo para esos años, se liberaliza la comercialización del café. Se autoriza la venta del café molido envasado y se desarrollan las nuevas tecnologías que permiten el envasado al vacío, con la posibilidad de distribución a nivel nacional</p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Siempre esperándote</strong>
                    </h2>
                    <hr>
                    <p>Porque no somos nada sin nuestros clientes, porque tú también te mereces ese momento de romper con la monotía...</p>
                    <p>Estaremos encantados de ofrecerte los mejores cafés del mundo. Podrás elegir entre más de 10 variedades que seguro que satisfará el gusto de los paladares más exigentes. </p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
<?php include 'footer.php' ?>

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
