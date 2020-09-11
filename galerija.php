<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <title>Padangos | Gariūnai</title>

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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

    <div class="container content">
        <div class="row align-content-center">
            <?php 
                $dir = "assets/images-carousel/*.jpg";
                $images = glob( $dir );
            ?>
            <?php foreach( $images as $image ): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card  m-1">
                        <img class="card-img-top p-1" src="<?php echo $image ?>" alt="Card image cap">
                    </div>
                </div>
            <?php endforeach; ?>

                <?php 
                $dir = "assets/images/*.jpg";
                $images = glob( $dir );
            ?>
            <?php foreach( $images as $image ): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card  m-1">
                        <img class="card-img-top p-1" src="<?php echo $image ?>" alt="Card image cap">
                    </div>
                </div>
            <?php endforeach; ?>
            
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