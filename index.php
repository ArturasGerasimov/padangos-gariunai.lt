<?php include 'brains.php'; ?>

<!DOCTYPE html>
<html lang="lt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <title>Padangos | Gariūnai</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/styles/styles.css" rel="stylesheet">

</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Padangos | Gariūnai</a>
            <div class="d-flex flex-row-reverse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/galerija.php">Galerija</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <div class="content container">

   <!-- form for tires -->
    <?php 
        if (!empty($msg)) {
            echo "<h2>$msg</h2>";
        } 
    ?>

    <form method="POST" id="contact-form" class="my-5">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <label for="diameter"></label>
                <input class="form-control" type="text" name="diameter" id="diameter" placeholder="Skersmuo" required>
            </div>
            <div class="col-lg-3 col-md-6">
                <label for="width"></label>
                <input class="form-control" type="number" name="width" id="width" placeholder="Plotis"  required>
            </div>
            <div class="col-lg-3 col-md-6">
                <label for="heigh"></label>
                <input class="form-control" type="number" name="heigh" id="heigh" placeholder="Aukstis"  required>
            </div>
            <div class="col-lg-3 col-md-6">
                <label for="number"></label>
                <input class="form-control" type="number" name="number" id="number" placeholder="Telefono numeris" required>
            </div>
        </div>
        <input type="submit" value="Siųsti" class="btn">
    </form>

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images-carousel/img24.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images-carousel/img3.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images-carousel/img52.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images-carousel/img8.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/images-carousel/img9.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- content -->
    <div class="row align-items-center my-5">
        <div class="col-lg-7">
            <img class="img-fluid rounded mb-4 mb-lg-0" src="assets/images/masina1.jpg" alt="">
        </div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">Pavadinimas apie darba </h1>
            <p>Detalesne info apie atliekama darba</p>
            <a class="btn btn-primary p-2" href="tel:+37067730914">Skambinti mums</a>
        </div>
    </div>

    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body">
            <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
            <div class="card-body">
                <h2 class="card-title">Card One</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
            </div>
            <!-- <div class="card-footer">
                <a href="#" class="btn btn-sm mb-2">More Info</a>
            </div> -->
            </div>
        </div>

        <div class="col-md-4 mb-5">
            <div class="card h-100">
            <div class="card-body">
                <h2 class="card-title">Card Two</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
            </div>
            <!-- <div class="card-footer">
                <a href="#" class="btn btn-sm mb-2">More Info</a>
            </div> -->
            </div>
        </div>

        <div class="col-md-4 mb-5">
            <div class="card h-100">
            <div class="card-body">
                <h2 class="card-title">Card Three</h2>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
            </div>
            <!-- <div class="card-footer">
                <a href="#" class="btn btn-sm mb-2">More Info</a>
            </div> -->
            </div>
        </div>

        <!-- map -->
        <iframe class="w-100 mb-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1153.9865166521834!2d25.16011537210124!3d54.65729989651302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd93189c64aef5%3A0x7509d1b57bfbe061!2sGari%C5%ABn%C5%B3%20g.%2077%2C%20Vilnius%2002300!5e0!3m2!1sen!2slt!4v1599594972049!5m2!1sen!2slt" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>
</div>

<!-- footer -->
<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img class="logo" src="assets/images/logo.png" alt="">
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <button type="button" class="btn btn-default">Contact us</button>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2020 Visos teises priklauso Padangos Gariūnai </p>
        </div>
    </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
  <script src="script.js"></script>

</body>
</html>
