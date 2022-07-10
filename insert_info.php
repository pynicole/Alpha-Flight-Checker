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

    function randomNumber($length) {
        $result = '';
    
        for($i = 0; $i < $length; $i++) {
            $result .= mt_rand(0, 9);
        }
    
        return $result;
    }

    $MemberID = $_REQUEST['MemberID'];
    $FlightNo = $_REQUEST['FlightNo'];
    $Origin = $_REQUEST['Origin'];
    $Destination = $_REQUEST['Destination'];
    $FlightDate = $_REQUEST['FlightDate'];
    $DepTime = $_REQUEST['DepTime'];
    $ArriveTime = $_REQUEST['ArriveTime'];
    $AirplaneID = $_REQUEST['AirplaneID'];

    $sql = "INSERT INTO flight 
    VALUES('$FlightNo', '$Origin', '$Destination', '$FlightDate', '$DepTime', '$ArriveTime', '$AirplaneID')";
    
    if(mysqli_query($conn, $sql)){
        echo "<p>You have completed the form.</p>";

        echo nl2br("\n$FlightNo\n $Origin\n "
            . "$Destination\n $FlightDate\n $DepTime\n$ArriveTime\n$AirplaneID");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    

    

    $SeatNo = randomNumber(2);
    
    $sql = "INSERT INTO passengerticket VALUES('$FlightNo', '$MemberID', '$SeatNo')";
    
    if(mysqli_query($conn, $sql)){
        echo "<p>You have completed the form.</p>";

        echo nl2br("\n$FlightNo\n $MemberID\n "
            . "$SeatNo");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    mysqli_close($conn);

    
    ?>

  

	
	
	
	
	
</body>
</html>