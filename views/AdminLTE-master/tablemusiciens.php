<!DOCTYPE html>
<html>
<head>
  <title>List of Musicians</title>
  <style>
    body {
      background-color: #000;
      color: #fff;
      font-family: "Merriweather", serif;
      padding-top: 150px;
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
      right: 120px;
      top: 50%;
      transform: translateY(-50%);
    }
    .supprimer-btn {
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
  </style>
  <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
</head>
<body>
  <h1>List of Musicians</h1>
  <ul>
  <?php
  // Array of musician names
  $musicians = array("Bob Dylan", "Jimi Hendrix", "Janis Joplin", "David Bowie", "Prince");

  // Loop through array and display names in list item with modifier and supprimer buttons
  foreach ($musicians as $musician) {
    echo '<li><span>' . $musician . '</span><button class="modifier-btn">Modifier</button><button class="supprimer-btn">Supprimer</button></li>';
  }
  ?>
  </ul>
</body>
</html>
