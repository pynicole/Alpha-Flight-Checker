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

    


    <?php
    include"connect.php";

    


    $sql = "DELETE FROM passengerticket WHERE FlightNo='".$_GET['FlightNo']."' ";

    if ($conn->query($sql) === TRUE) {
       header("Location: index.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    
    ?>
    

	
	
	
	
	
</body>
</html>