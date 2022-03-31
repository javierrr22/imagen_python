<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body>

  <?php include 'header.php'; ?>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Encuéntranos en: </strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255196.3408586887!2d73.39601656375841!3d1.9772410947913481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x24b599bfaafb7bbd%3A0x414509e181956289!2sMaldives!5e0!3m2!1sca!2ses!4v1452708002165" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Teléfono:
                        <strong>123.456.7890</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">nombre@dominio.com</a></strong>
                    </p>
                    <p>Dirección:
                        <strong>1234, Calle Perdida, 
                            <br>Islas Maldivas</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Formulario de 
                        <strong>Contacto</strong>
                    </h2>
                    <hr>
                    <p>Rellena el siguiente formulario para ponerte en contacto con nosotros y hacer tu reserva. </p>
                   <form role="form" id="contact" name="contact" method="post">  
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nombre</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Dirección Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Teléfono</label>
                                <input type="tel" name="phone" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Mensaje</label>
                                <textarea  name="message" class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                               <!-- <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Enviar</button>-->
                                 <!--<input id="submit" type="submit" name="submit" class="btn btn-default" value="Enviar" /> -->
                            </div>
                        </div>
                    </form>
                    
 <div class="alert alert-success">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
<!--
<div id="error">
  <span>
    <p>Something went wrong, try refreshing and submitting the form again.</p>
  </span>
</div>-->
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
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    
    <script src="js/validate.js"></script>
    <script src="js/function.answercheck.js"></script>
    
</body>

</html>
