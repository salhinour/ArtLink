<?php
include 'C:\xampp\htdocs\ArtLink\controller\musicienC.php';
include 'C:\xampp\htdocs\ArtLink\model\Musician.php';
require_once 'C:\xampp\htdocs\ArtLink\controller\categorieC.php';
include 'C:\xampp\htdocs\ArtLink\Model\categorie.php';
//$musician = new musicianC();
//$musicians = $musician->listmusicians();
if(isset($_GET['search'])){
  $musician = new musicianC();
  $musicians = $musician->getbynom($_GET['search']);
} else {
  $musician = new musicianC();
  $musicians = $musician->listmusicians();
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
          <a href="index.php" class="navbar-brand mt-2"><img src="../../assets/img/logo.png"  height="120px" alt=""></a>       
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
                <a class="nav-link" href="Forums">
                Forums
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
                <h2 class="head-title"> Musicians  </h2>

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


<?php
$musician = new musicianC();
$musicians = $musician->listmusicians();  ?>
<body>
	<div class="container">
		<form method="get">
    <label for="categorie" style="font-size: 20px; font-weight: bold;">Categorie:</label>
    <select id="categorie" name="categorie" style="width: 250px;">
  <option value="all">All categories</option>
  <?php
    $selected_category = isset($_GET['categorie']) ? $_GET['categorie'] : '';
    $categorie = new categorieC();
    $categories = $categorie->listcategories();
    foreach ($categories as $category) {
      $selected = $selected_category == $category['nom_categorie'] ? 'selected' : '';
      echo '<option value="'.$category['nom_categorie'].'" '.$selected.'>'.$category['nom_categorie'].'</option>';
    }
  ?>
</select>

<?php
  $musicianc = new musicianC();
  if (isset($_GET['categorie']) && $_GET['categorie'] !== 'all') {
    $cat = $_GET['categorie'];
    $musicians = $musicianc->listbycategorie($cat);
  } else {
    $musicians = $musicianc->listmusicians();
  }
?>

<input type="submit" value="Filter">

		</form>
  <br>
		<div class="musicians-container" style="display: flex; flex-wrap: wrap;">
			<?php
			$musicianc = new musicianC();
      if (isset($_GET['categorie']) && $_GET['categorie'] !== 'all') {
        $cat = $_GET['categorie'];
        $musicians = $musicianc->listbycategorie($cat);
      } else {
        $musicians = $musicianc->listmusicians();
      }
			foreach ($musicians as $musician) {
        echo '<div class="profile" style="display: inline-block; margin-right: 10px; margin-bottom: 10px;">';
        echo '<img src="' . $musician['image'] . '">'; 
        echo '<h2>' . $musician['nom_musician'] . ' ' . $musician['prenom_musician']. '</h2>';
        $cat=new categorieC();
        $category = $cat->getbyid($musician['id_categorie']);
        echo '<p style="font-size: smaller; color: gray;">' . $category['nom_categorie'] . '</p>';
        echo '<a href="Description.php?id=' . $musician['id_musician'] . '"><button class="button">See more</button></a><br>';
    
        // Calculate likes and dislikes percentages
        if($musician['likes']!=0 || $musician['dislikes']!=0){
        $likes = round($musician['likes'] / ($musician['likes'] + $musician['dislikes']) * 100);
        $dislikes = 100 - $likes;    
        // Display likes and dislikes with icons and percentages
        echo '<p><a href="increment_likes.php?id=' . $musician['id_musician'] . '&type=likes"><img src="thumbs-up.png" style="width: 40px; height: 40px;"></a> ' . $likes . '%</p>';
        echo '<p><a href="increment_dislikes.php?id=' . $musician['id_musician'] . '&type=dislikes"><img src="thumbs-down.png" style="width: 40px; height: 40px;"></a> ' . $dislikes . '%</p>';
      }
        else{
          echo '<br><p><a href="increment_likes.php?id=' . $musician['id_musician'] . '&type=likes"><img src="thumbs-up.png" style="width: 40px; height: 40px;"></a>';
          echo '<br><p><a href="increment_dislikes.php?id=' . $musician['id_musician'] . '&type=dislikes"><img src="thumbs-down.png" style="width: 40px; height: 40px;"></a> ';
        }
        echo '</div>';
    }
    
    
			?>
		</div>
    <br>
    <div>
    <?php
// Retrieve all musicians and their categories
$musicianc = new musicianC();
$musicians = $musicianc->listmusicians();
$categories = array();
foreach ($musicians as $musician) {
    $category_id = $musician['id_categorie'];
    if (!isset($categories[$category_id])) {
        $categorie = new categorieC();
        $category = $categorie->getbyid($category_id);
        $categories[$category_id] = $category['nom_categorie'];
    }
}

// Count the number of musicians in each category
$counts = array();
foreach ($musicians as $musician) {
    $category_id = $musician['id_categorie'];
    if (!isset($counts[$category_id])) {
        $counts[$category_id] = 0;
    }
    $counts[$category_id]++;
}

// Calculate the percentage of musicians in each category
$total = count($musicians);
$percentages = array();
foreach ($counts as $category_id => $count) {
    $percentages[$categories[$category_id]] = round($count / $total * 100, 2);
}

// Display the results in a pie chart
echo '<br><div id="piechart"></div>';
echo '<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>';
echo '<script type="text/javascript">';
echo "google.charts.load('current', {'packages':['corechart']});";
echo "google.charts.setOnLoadCallback(drawChart);";
echo "function drawChart() {";
echo "var data = google.visualization.arrayToDataTable([";
echo "['Category', 'Percentage'],";
foreach ($percentages as $category => $percentage) {
    echo "['".$category."', ".$percentage."],";
}
echo "]);";
echo "var options = {title: 'Percentage of Musicians in Each Category'};";
echo "var chart = new google.visualization.PieChart(document.getElementById('piechart'));";
echo "chart.draw(data, options);";
echo "}";
echo "</script>";
?>
<div\>



	</div>
</body>
