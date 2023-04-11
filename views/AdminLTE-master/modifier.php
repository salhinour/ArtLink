<!DOCTYPE html>
<html>
<head>
	<title>Modifier</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Merriweather', serif;
			background-color: #222;
			color: #fff;
			padding-top: 150px;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-size: 18px;
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
	<h1>Modifier un musicien</h1>
	<form method="post" action="ajout_traitement.php" enctype="multipart/form-data">
		<label for="last_name">Last name:</label>
		<input type="text" id="last_name" name="last_name" required>

		<label for="first_name">First name:</label>
		<input type="text" id="first_name" name="first_name" required>

		<label for="description">Description:</label>
		<input type="text" id="description" name="description" required>

		<label for="image">Image:</label>
		<input type="file" id="image" name="image" accept="image/*" required>

		<label for="prix">Prix:</label>
		<input type="number" id="prix" name="prix" step="0.01" required>

		<input type="submit" value="Submit">
	</form>
</body>
</html>
