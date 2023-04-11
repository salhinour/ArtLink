<?php
include '../../controller/evenementc.php';
$evenementc = new EvenementC();
$list = $evenementc->showEvenement($_GET['id']); 
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ArtLink</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="../../assets/fonts/line-icons.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/responsive.css">
  <title>Information sur l'evenement</title>
  <style>
    body {
      background-color: #000;
      color: #fff;
      font-family: "Merriweather", serif;
      padding-top: 150px;
    }
    .musician {
      background-image: url("https://via.placeholder.com/1200x800");
      background-size: cover;
      background-position: center;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 50px;
      box-sizing: border-box;
    }
    .musician h1 {
      font-size: 48px;
      margin: 0;
      text-align: center;
      text-shadow: 2px 2px #000;
    }
    .musician p {
      font-size: 24px;
      line-height: 1.5;
      text-align: center;
      margin-top: 20px;
    }
    .button {
      background-color: pink;
      color: black;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 20px;
      font-weight: bold;
      transition: background-color 0.2s;
    }
    .button:hover {
      background-color: #f59bbd;
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="index.html" class="navbar-brand mt-2"><img src="../../assets/img/logo.png"  height="120px" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#schedules">
                  schedules
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  Speakers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="evenement.php">
                  evenement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Musicians.php">
                  Musicians
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Reservation.php">
                Reservation
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="reclamation.php">
                  Reclamation
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->
    </header>

      
    <!-- Contact Us Section End -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../assets/js/jquery-min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/jquery.countdown.min.js"></script>
    <script src="../../assets/js/waypoints.min.js"></script>
    <script src="../../assets/js/jquery.counterup.min.js"></script>
    <script src="../../assets/js/jquery.nav.js"></script>
    <script src="../../assets/js/jquery.easing.min.js"></script>
    <script src="../../assets/js/wow.js"></script>
    <script src="../../assets/js/nivo-lightbox.js"></script>
    <script src="../../assets/js/video.js"></script>
    <script src="../../assets/js/main.js"></script>      
  </body>
  <div class="evenement">
    <h1><?php echo $list['titre']?></h1>
    <b><?php echo $list['description']?></b><br>
    <b><?php echo $list['dateevent']?></b><br>
    <b><?php echo $list['localisation']?></b><br>
    <b>capaciter: <?php echo $list['capaciter']?> personnes</b><br>
    
    <a href="evenement.php"><button class="button">Retourner</button></a>
  </div>
</body>
</html>
