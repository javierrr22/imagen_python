<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?> 
<body>

    <!-- Navigation -->
    

    <!-- Half Page Image Background Carousel Header -->
 <?php include 'menu.php' ?>

    <!-- Page Content -->
    <div class="container">

       
       <?include 'form.php' ?>
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
