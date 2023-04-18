<?php
include 'C:\xampp\htdocs\ArtLink\controller\musicienC.php';
include 'C:\xampp\htdocs\ArtLink\model\Musician.php';

$musician = new musicianC();
$musicians = $musician->listmusicians();
?>
<!DOCTYPE html>
<html>
<head>
  <title>List of Musicians</title>
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
  foreach ($musicians as $musician) {
    echo '<li><span>'.$musician['nom_musician'].' '.$musician['prenom_musician']. '</span> <a href="modifier.php?id='.$musician['id_musician'].'"><button class="modifier-btn">Modify</button></a><a href="supprimer.php?id='.$musician['id_musician'].'"><button class="supprimer-btn">Delete</button></a></li>';
  }
  //<a href="delete.php?id=<?php echo $client['idClient']; 
  ?>
  </ul>
  <a href="index.php"><button class="return-btn">Return</button></a>
</body>
</html>
