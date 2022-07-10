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
	include "connect.php";
	
    // take user input 'LastName' and assign to $passenger
	$passenger = $_GET["LastName"];

	// get passenger info from last name
	$passengerInfo = "SELECT FirstName, LastName, Gender, BirthDate, MemberID FROM passenger WHERE LastName LIKE '%$passenger%'";
    
    // put query in $result
	$result = $conn->query($passengerInfo);

    
    
    
    // if there is data
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
		    echo "<p>Hello " . $row["FirstName"]. " " . $row["LastName"]. 
            " <br><br> About you: <br> Gender: " . $row["Gender"]. "<br> Birthday: " . $row["BirthDate"] . "</p>";
            
            // get member ID from last name
            $memberID = "SELECT MemberID FROM passenger WHERE LastName LIKE '%$passenger%'";
            $result = $conn->query($memberID);
            // display member ID of person
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<p><br>Member ID: " . $row["MemberID"] ."</p>";
                    $ID = $row['MemberID'];
                }
            }
            
            // get flight info from member ID
            $flightNo = "SELECT FlightNo, SeatNo FROM passengerticket WHERE MemberID LIKE '%$ID%'";
            $result = $conn->query($flightNo);
            // display flight info
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<p><br><br>About your Flight: <br>Flight #:" 
                    . $row["FlightNo"]. "<br>Seat #: " . $row["SeatNo"] . "</p>";
                }
            }
            echo " <p><br><br>Would you like to add or delete a flight?</p>";
            if(isset($_POST['confirm'])) {
                if($_POST['confirm'] == 'Add') {
                    header("location:add_flight.php");
                } else if($_POST['confirm'] == 'Delete') {
                    header("location:delete_flight.php");
                }
            }
	    }
    // if there is no data
	} else {
	    echo " <p>Oh no! You don't have any flights.<br><br>Would you like to add a flight?</p>";
        if(isset($_POST['confirm'])) {
            if($_POST['confirm'] == 'Yes') {
                header("location:add_member.php");
            } else if($_POST['confirm'] == 'No') {
                header("location:index.php");
            }
        }
	}

    
?>
<form method="post">
    <?php
    if(isset($_REQUEST['id'])) {
    }
    ?>
    <input type="submit" name="confirm" value="Add"><br/>
    <input type="submit" name="confirm" value="Delete"><br/>
</form>
	

</body>
</html>
