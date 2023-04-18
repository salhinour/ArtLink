<?php
include 'C:\xampp\htdocs\ArtLink\controller\categorieC.php';
include 'C:\xampp\htdocs\ArtLink\model\Categorie.php';

$categorie = new categorieC();
$categories = $categorie->listcategories();
?>
<!DOCTYPE html>
<html>
<head>
  <title>List of Categories</title>
  <style>
    body {
      background-color: grey;
      color: #fff;
      font-family: "Merriweather", serif;
      padding-top: 150px;
      text-align: center;
    }
    ul {
      list-style: none;
      padding: 0;
      margin: 50px auto;
      width: 50%;
      text-align: left;
    }
    li {
      margin-bottom: 20px;
      padding: 20px;
      border: 1px solid #fff;
      border-radius: 50px;
      background-color: #f2f2f2;
      box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.3);
      font-size: 24px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 2px;
      position: relative;
    }
    li span {
      color: #000;
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
    }
    .modifier-btn {
      background-color: green;
      border: none;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      padding: 10px;
      border-radius: 50px;
      cursor: pointer;
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
    }
    .supprimer-btn {
      background-color: red;
      border: none;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      padding: 10px;
      border-radius: 50px;
      cursor: pointer;
      position: absolute;
      right: 150px;
      top: 50%;
      transform: translateY(-50%);
    }
    .return-btn {
      background-color: green;
      border: none;
      color: #fff;
      font-size: 24px;
      font-weight: bold;
      padding: 20px;
      border-radius: 50px;
      cursor: pointer;
      display: block;
      margin: 0 auto;
      margin-top: 50px;
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
</head>
<body>

  <h1>List of Musicians</h1>
  <ul>
  <?php
  // Loop through array and display names in list item with modifier and supprimer buttons
  foreach ($categories as $categorie) {
    echo '<li><span>'.$categorie['nom_categorie'].'</span> <a href="modifierc.php?id='.$categorie['id_categorie'].'"><button class="modifier-btn">Modify</button></a><a href="supprimerc.php?id='.$categorie['id_categorie'].'"><button class="supprimer-btn">Delete</button></a></li>';
} 
  ?>
  </ul>
  <a href="index.php"><button class="return-btn">Return</button></a>
</body>
</html>
