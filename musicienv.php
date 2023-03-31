<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>List of Musicians</title>
	<style>
		body {
			background-color: black;
			font-family: Merriweather, serif;
			color: white;
			margin: 0;
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
			<a href="musiciendesc.php"><button class="button">Savoir encore</button></a>
		</div>
		<div class="profile">
			<img src="https://via.placeholder.com/150x150.png?text=Profile+Picture">
			<h2>Musician 2</h2>
			<a href="musiciendesc.php"><button class="button">Savoir encore</button></a>
		</div>
		<div class="profile">
			<img src="https://via.placeholder.com/150x150.png?text=Profile+Picture">
			<h2>Musician 3</h2>
			<a href="musiciendesc.php"><button class="button">Savoir encore</button></a>
		</div>
		<div class="profile">
			<img src="https://via.placeholder.com/150x150.png?text=Profile+Picture">
			<h2>Musician 4</h2>
			<a href="musiciendesc.php"><button class="button">Savoir encore</button></a>
		</div>
	</div>
</body>
</html>
