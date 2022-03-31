<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?> 
<body>

    <!-- Navigation -->
    

    <!-- Half Page Image Background Carousel Header -->
 <?php include 'header.php' ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="centraTexto">Un Oasis en medio de la ciudad</h1>
                <p>¡Escápate a disfrutar!. Porque te lo mereces. Llevamos un ritmo de vida estresante y 
                todos merecemos parar un momento, coger aire y descansar. 
                Para eso se ha creado nuestro hotel. Para hacerte sentir bien y darte lo que realmente te mereces. 
                </p>
            </div>
        </div>
        <h3 class="centraTexto"> Te ofrecemos 3 maneras de sentirte cómodo/a. Escoge la que se adapte más a ti. </h3>
        <hr>
        <div class="row">

		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="img/small-room.png" alt="" class="img-rounded">
		      <div class="caption">
		        <h3 class="centraTexto">Habitación Normal</h3>
		        <p>Si sólo vienes a pasar una noche...</p>
		        <p class="centraTexto"><a href="#" class="btn btn-success" role="button">Reserva Ahora</a></p>
		      </div>
		    </div>

		  </div>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="img/normal-room.png" alt="" class="img-rounded">
		      <div class="caption">
		        <h3 class="centraTexto">Habitación Extra</h3>
		        <p>Si necesitas una escapadita...</p>
		        <p class="centraTexto"><a href="#" class="btn btn-success" role="button">Reserva Ahora</a></p>
		      </div>
		    </div>

		  </div>
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <img src="img/suite.png" alt="" class="img-rounded">
		      <div class="caption">
		        <h3 class="centraTexto">Suite</h3>
		        <p>Para los más románticos...</p>
		        <p class="centraTexto"><a href="#" class="btn btn-success" role="button">Reserva Ahora</a></p>
		      </div>
		    </div>

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
