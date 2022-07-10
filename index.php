<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<title>index.html</title>
	<link rel="stylesheet" href="style.css">
	
	
</head>

<body>
	<header>
		<a href="index.php"><img src="flight_checkah.png" alt="Airplane Ticket Logo" style="width:500px; float:left;"></img></a>
		
	
	</header>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<p> 
	Welcome to Alpha Flight Checker!<br>
	Here you can check your flight information.<br><br>
	What is your last name?:
	</p>
	
	
	
	<?php
	include"connect.php";
	//include "search_all_flights.php";
	//include "search_flightno.php";
	
	
	?>
	
	
	
	
	<form action = "search_passenger.php">
		<label for="LastName" style="font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'">Enter Last Name:</label>
		<input type="text" id="LastName" name="LastName">
		<input type="submit" id="Submit" name="Submit">
	</form>
	
	
	
	
	
	
	
	
	
	
</body>
</html>
