<?php
include '../../controller/ReclamationC.php';
include '../../model/Reclamation.php';

if(isset($_POST['subject']) && isset($_POST['message'])) {
  $reclamation=new Reclamation(NULL ,$_POST['subject'],new DateTime("2222/11/03"),$_POST['message'],'NON TRAITE',$_POST['rating']);

  $reclamationsC=new ReclamationC;
  $reclamationsC->ajouterRec($reclamation);
  // Vérifier si l'utilisateur a déjà voté
if(isset($_COOKIE['rating'])) {
  echo 'Vous avez déjà voté.';
} else {
  // Vérifier si l'utilisateur a soumis le formulaire de vote
  if(isset($_POST['submit'])) {
      // Récupérer la note choisie par l'utilisateur
      $rating = $_POST['rating'];
      // Vérifier si la note est valide (entre 1 et 5)
      if($rating >= 1 && $rating <= 5) {
          // Stocker la note dans un cookie pour que l'utilisateur ne puisse pas voter plusieurs fois
          setcookie('rating', $rating, time() + (86400 * 30), "/"); // expire dans 30 jours
          echo 'Merci pour votre vote de ' . $rating . ' étoiles.';
      } else {
          echo 'Note invalide.';
      }
  } else {
      // Afficher le formulaire de vote
?>

<?php

//champ exist  (empty :champ non vide)
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
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
                <a class="nav-link" href="#gallery">
                  Gallery
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

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9 col-sm-12">
              <div class="contents text-center">
                <div class="icon">
                  <i class="lni-mic"></i>
                </div>
                <h2 class="head-title">Reclamation  </h2>
                <p class="banner-desc">
                  You can write here your reclamation.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>


    <section id="contact-map" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Contact Us</h2>
              
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
              <div class="form-wrapper">


              <form method="post" action="#" name="reclamation" >
                  <div class="row">
                    
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                      <div class="rating">
<form method="post">
  <input type="radio" name="rating" id="star5" value="5">
  <label for="star5"></label>
  <input type="radio" name="rating" id="star4" value="4">
  <label for="star4"></label>
  <input type="radio" name="rating" id="star3" value="3">
  <label for="star3"></label>
  <input type="radio" name="rating" id="star2" value="2">
  <label for="star2"></label>
  <input type="radio" name="rating" id="star1" value="1">
  <label for="star1"></label>
  <input type="submit" name="submit" value="Voter">
</form>
</div>

<style>
.rating {
display: inline-block;
}

.rating input[type="radio"] {
display: none;
}

.rating label {
color: #ddd;
font-size: 30px;
cursor: pointer;
}

.rating label:before {
content: "\2605";
margin-right: 5px;
}

.rating input[type="radio"]:checked ~ label {
color: #FFC107;
}
</style>
                      
</style>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" >
                        <p style="color: red" id="subjectEr"></p>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" rows="4" id="message" name="message" ></textarea>
                        <p style="color: red" id="messageEr"></p>
                      </div>
                      <div class="form-submit">
                        <input type="submit" class="btn btn-common" id="form-submit" value="ajouter" >
                        <div id="msgSubmit" class="h3 text-center hidden"></div>

                        <p id='erreur'></p>
                      </div>
                    </div>
                  </div>
                </form>




              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Us Section End -->

    <!-- Map Section Start -->
    <section id="google-map-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.15480778837!2d-77.44908382752939!3d38.953293865566366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6775cb22a9fa1341!2sThe+Firkin+%26+Fox!5e0!3m2!1sen!2sbd!4v1543773685573"></object>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">
              <h2 class="subscribe-title">To Get Nearly Updates</h2>
              <form class="text-center form-inline">
                <input class="mb-20 form-control" name="email" placeholder="Enter Your Email Here">
                
                <button type="submit" class="btn btn-common sub-btn" data-style="zoom-in" data-spinner-size="30" name="submit" id="submit">
                  <span class="ladda-label"><i class="lni-check-box"></i> Subscribe</span>
                </button>
              </form>
            </div>
            <div class="footer-logo">
              <img src="assets/img/logo.png" alt="">
            </div>
            <div class="social-icons-footer">
              <ul>
                <li class="facebook"><a target="_blank" href="3"><i class="lni-facebook-filled"></i></a></li>
                <li class="twitter"><a target="_blank" href="3"><i class="lni-twitter-filled"></i></a></li>
                <li class="pinterest"><a target="_blank" href="3"><i class="lni-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="site-info">
              <p>Designed and Developed by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
      <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
var letters = /^[A-Za-z]+$/;

var subject = document.getElementById('subject');

document.forms["reclamation"].addEventListener("submit", function (e) {

    console.log(subject);
    var inputs = document.forms["reclamation"];

   

    let errors = false;

    //Traitement cas par cas
    if (subject.value.length< 3) {
        errors = false;     
        document.getElementById("subjectEr").innerHTML =
            "Le nom doit compter au minimum 3 caractères.";
    } else if (!subject.value.match(letters)) {
        errors = false;
        document.getElementById("subjectEr").innerHTML =
            "Veuillez entrer un nom valid ! (seulement des lettres)";
    } else {
        errors = true;
    }
   

   
       

    //Traitement générique
    for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {
            errors = false;
            document.getElementById("erreur").innerHTML =
                "Veuillez renseigner tous les champs";
        }
    }

    if (errors === false) {
        e.preventDefault();
    } else {
        alert("formulaire envoyé");
    }
});

    </script>
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
</html>