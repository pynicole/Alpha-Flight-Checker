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
        <a href="index.php"><img src="flight_checkah.png" alt="Airplane Ticket Logo" style="width:500px;"></img></a>	
	</header>
	<br>
	<br>
	<br>
	<br>
	<br>

    <p>
        Enter the flight # you would like to delete: 
    </p>
    <?php
    include"connect.php";

  
    


    
    ?>
    <form action = "delete_flight_confirm.php">
		<label for="FlightNo" style="font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'">Enter Flight #:</label>
		<input type="text" id="FlightNo" name="FlightNo">
		<input type="submit" id="Submit" name="Submit">
	</form>
   

	
	
	
	
	
</body>
</html>