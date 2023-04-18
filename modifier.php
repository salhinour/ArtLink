<?php
require_once 'C:\xampp\htdocs\ArtLink\controller\musicienC.php';
require_once 'C:\xampp\htdocs\ArtLink\model\Musician.php';


if(isset($_POST['prenom']) && isset($_POST['nom'])  && isset($_POST['desc'])  && isset($_POST['prix']) && isset($_POST['image']) && isset($_POST['categorie'])) {
    $musician = new musician($_POST['nom'], $_POST['prenom'], $_POST['desc'], $_POST['prix'], $_POST['image'], $_POST['categorie']);
    $musicianc = new musicianC();
    $musicianc->updatemusician($musician,$_GET['id']);
    header("Location: tablemusiciens.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ArtLink</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="Assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="Assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="Assets/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="Assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="Assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="Assets/img/mostache.png">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	<title>Modifier</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Merriweather', serif;
			background-color: #222;
			color: #fff;
			padding-top: 50px;
			text-align: center;
		}
		label {
			display: inline-block;
			margin-bottom: 5px;
			margin-top: 20px;
			font-size: 24px;
			width: 200px;
			text-align: right;
			padding-right: 10px;
		}
		input[type="text"], input[type="number"], input[type="file"] {
			padding: 10px;
			margin-bottom: 10px;
			font-size: 18px;
			border: none;
			border-radius: 5px;
			background-color: #fff;
			color: #222;
		}
		input[type="submit"] {
			padding: 10px;
			font-size: 18px;
			border: none;
			border-radius: 5px;
			background-color: #4CAF50;
			color: #fff;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>

</head>
<body>
	
<?php include_once 'include/header.php'; ?>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        <nav id="sidebar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center">
            <a href="index.html" class="navbar-brand mt-2"><img src="../../assets/img/logo.png"  height="120px" alt=""></a>
            </div>
            <!-- Sidebar Navidation Menus--><span class="heading">Menu Principal</span>
            <ul class="list-unstyled">
                <li class="active">
                    <a href="index.php"> <i class="icon-home"></i>Accueil </a>
                </li>
                <!-- <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Graphiques </a></li> -->
                <!-- <li><a href="forms.html"> <i class="icon-padnote"></i>Formulaires </a></li> -->
                <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Informations </a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="ajoutc.php">Ajouter une catégorie</a></li>
                        <li><a href="ajout.php">Ajouter un musicien</a></li>
                        <li><a href="ajouter_carte.php">Ajouter un évenement </a></li>

                </li>
                <li>
                    <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Tables</a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="tablecategories.php">Categories</a></li>
                        <li><a href="tablemusiciens.php">Musiciens</a></li>
                        <li><a href="afficher_client.php">Réservations</a></li>
                        <li><a href="afficher_carte.php">Forums</a></li>
                        <li><a href="tables_inf.php">Evenements</a></li>
                        <li><a href="tables_spons.php">Utilisateurs</a></li>
                    </ul>
        </nav>
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h2 class="h5 no-margin-bottom">Tableau de bord</h2>
					<section class="no-padding-top no-padding-bottom">
					<h1>Modifier un musicien</h1>
	<form method="post" action="" enctype="multipart/form-data" onsubmit="return validateForm();">
		
    <?php 
           $musician1 = new musicianC();
           $musician2 = $musician1->getbyid($_GET['id']); ?>
        <label for="last_name">Last name:</label>
        <input type="text" id="last_name" name="nom" required value=<?php echo $musician2['nom_musician']; ?> ><br>

		<label for="first_name">First name:</label>
		<input type="text" id="first_name" name="prenom" required value=<?php echo $musician2['prenom_musician']; ?>><br>

		<label for="description">Description:</label>
		<input type="text" id="description" name="desc" required value=<?php echo $musician2['description']; ?>><br>

		<label for="image">Image:</label>
        <input type="text" id="image" name="image" required value=<?php echo $musician2['image']; ?>><br>

		<label for="prix">Prix:</label>
		<input type="number" id="prix" name="prix" step="0.01" required value=<?php echo $musician2['prix']; ?> ><br>

        <label for="categorie">Categorie:</label>
		<input type="text" id="categorie" name="categorie" required value=<?php echo $musician2['categorie']; ?> ><br>

		<input type="submit" value="Submit">
	</form>
            		</section>
                </div>
            </div>
            
            <footer class="footer">
                <div class="footer__block block no-margin-bottom">
                    <div class="container-fluid text-center">
                        <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                        <p class="no-margin-bottom">2020 &copy; Your company.
                            <!-- Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin">Bootstrapious</a>.</p> -->
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="Assets/vendor/jquery/jquery.min.js"></script>
    <script src="Assets/vendor/popper.js/umd/popper.min.js">
    </script>
    <script src="Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="Assets/vendor/jquery.cookie/jquery.cookie.js">
    </script>
    <script src="Assets/vendor/chart.js/Chart.min.js"></script>
    <script src="Assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="Assets/js/charts-home.js"></script>
    <script src="Assets/js/front.js"></script>
    <script>
		function validateForm() {
			// Validate first name and last name
			var firstName = document.getElementById("first_name").value;
			var lastName = document.getElementById("last_name").value;

			if (firstName.length <= 2 || firstName.length > 30) {
				alert("First name should be between 3 and 30 characters long.");
				return false;
			}

			if (lastName.length <= 2 || lastName.length > 30) {
				alert("Last name should be between 3 and 30 characters long.");
				return false;
			}

			// Validate image label
			var imageLabel = document.getElementById("image").value;
			if (!imageLabel.includes("/")) {
				alert("Image label should include at least one '/' character.");
				return false;
			}
            
            var letters = /^[A-Za-z]+$/;
            if (!lastName.match(letters))
            {
                alert("Last name should contain only characters");
				return false;   
            }

            if (!firstName.match(letters))
            {
                alert("First name should contain only characters");
				return false;   
            }
			return true;
		}
	</script>
</body>
</html>
