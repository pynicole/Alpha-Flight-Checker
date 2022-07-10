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
	<form action="insert_info.php" method="post">
        <p>
            <label for="MemberID">Your Member ID (9-digit): </label>
            <input type ="text" name="MemberID" id="MemberID" required minlength="9" maxlength="9">
        </p>
        <p>
            <label for="FlightNo">Flight # (XXXX): </label>
            <input type ="text" name="FlightNo" id="FlightNo" required minlength="4" maxlength="4">
        </p>
        <p>
            <label for="Origin">Origin: </label>
            <input type ="text" name="Origin" id="Origin">
        </p>
        <p>
            <label for="Destination">Destination: </label>
            <input type ="text" name="Destination" id="Destination">
        </p>
        <p>
            <label for="FlightDate">Departure Date (MM-DD-YYYY): </label>
            <input type ="text" name="FlightDate" id="FlightDate" required minlength="10" maxlength="10">
        </p>
        <p>
            <label for="DepTime">Departure Time (HH:MM): </label>
            <input type ="text" name="DepTime" id="DepTime" required minlength="5" maxlength="5">
        </p>
        <p>
            <label for="ArriveTime">Arrival Time (HH:MM): </label>
            <input type ="text" name="ArriveTime" id="ArriveTime" required minlength="5" maxlength="5">
        </p>
        <p>
            <label for="AirplaneID">Airplane ID (XXXXX): </label>
            <input type ="text" name="AirplaneID" id="AirplaneID" required minlength="5" maxlength="5">
        </p>
	
        <input type="submit" value="Submit">
    </form>
	
    
    
    
    <?php
	include"connect.php";
	
	
	?>
	
	

	
</body>
</html>
