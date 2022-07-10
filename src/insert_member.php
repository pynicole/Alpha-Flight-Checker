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

    $MemberID = randomNumber(9);
    $FirstName = $_REQUEST['FirstName'];
    $LastName = $_REQUEST['LastName'];
    $Gender = $_REQUEST['Gender'];
    $BirthDate = $_REQUEST['BirthDate'];
    

    $sql = "INSERT INTO passenger
    VALUES('$MemberID', '$FirstName', '$LastName', '$Gender', '$BirthDate')";
    
    if(mysqli_query($conn, $sql)){
        echo "<p>You have completed the form.</p>";

        echo nl2br("\n$MemberID\n $FirstName\n "
            . "$LastName\n $Gender\n $BirthDate");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    mysqli_close($conn);

    echo "
    <p><br><br>Would you like to add a flight?</p>";
    if(isset($_POST['confirm'])) {
        if($_POST['confirm'] == 'Yes') {
            header("location:add_flight.php");
        } else if($_POST['confirm'] == 'No') {
            header("location:index.php");
        }
    }

    
    ?>
    <form method="post">
        <?php
        if(isset($_REQUEST['id'])) {
        }
        ?>
    <input type="submit" name="confirm" value="Yes"><br/>
    <input type="submit" name="confirm" value="No"><br/>
    </form>

	
	
	
	
	
</body>
</html>
