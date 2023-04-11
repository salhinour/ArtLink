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
                <h2 class="head-title">Musicians  </h2>
                <p class="banner-desc">
                 Ici la liste des musiciens </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

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

    <meta charset="UTF-8">
	<title>List of Musicians</title>
	<style>
		body {
			background-color: black;
			font-family: Merriweather, serif;
			color: white;
			margin: 0;
			padding-top: 150px; /* add padding to push content down */
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			padding: 20px;
		}
		.profile {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin: 10px;
			border-radius: 10px;
			padding: 10px;
			background-color: rgba(255,255,255,0.1);
			box-shadow: 0 0 10px rgba(0,0,0,0.5);
			transition: transform 0.2s;
		}
		.profile:hover {
			transform: scale(1.05);
			box-shadow: 0 0 20px rgba(0,0,0,0.7);
		}
		.profile img {
			width: 150px;
			height: 150px;
			border-radius: 50%;
			object-fit: cover;
			margin-bottom: 10px;
		}
		.profile h2 {
			font-size: 1.5rem;
			margin: 0;
		}
		.button {
			background-color: pink;
			color: black;
			border: none;
			padding: 10px;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 10px;
			font-weight: bold;
			transition: background-color 0.2s;
		}
		.button:hover {
			background-color: #f59bbd;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="profile">
			<img src="https://via.placeholder.com/150x150.png?text=Profile+Picture">
			<h2>Musician 1</h2>
			<a href="Description.php"><button class="button">Savoir encore</button></a>
		</div>
		<div class="profile">
			<img src="https://via.placeholder.com/150x150.png?text=Profile+Picture">
			<h2>Musician 2</h2>
			<a href="Description.php"><button class="button">Savoir encore</button></a>
		</div>
		<div class="profile">
			<img src="https://via.placeholder.com/150x150.png?text=Profile+Picture">
			<h2>Musician 3</h2>
			<a href="Description.php"><button class="button">Savoir encore</button></a>
		</div>
		<div class="profile">
			<img src="https://via.placeholder.com/150x150.png?text=Profile+Picture">
			<h2>Musician 4</h2>
			<a href="Description.php"><button class="button">Savoir encore</button></a>
		</div>
	</div
    
  </body>
</html>