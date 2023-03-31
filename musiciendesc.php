<!DOCTYPE html>
<html>
<head>
  <title>Information sur le Musicien</title>
  <style>
    body {
      background-color: #000;
      color: #fff;
      font-family: "Merriweather", serif;
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
  <div class="musician">
    <h1>Description</h1>
    <?php
    echo("<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, nobis nesciunt atque perferendis, ipsa doloremque deserunt cum qui.</p>");
    ?>
    <a href="musicienv.php"><button class="button">Retourner</button></a>
  </div>
</body>
</html>
