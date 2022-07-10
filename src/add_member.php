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
        First, we must create a new user for you.
        <br>
        Please fill out the following form:
        <br>
    </p>
		
	<form action="insert_member.php" method="post">
        <p>
            <label for="FirstName">First name: </label>
            <input type ="text" name="FirstName" id="FirstName">
        </p>
        <p>
            <label for="LastName">Last name: </label>
            <input type ="text" name="LastName" id="LastName">
        </p>
        <p>
            <label for="Gender">Gender (M/F): </label>
            <input type ="text" name="Gender" id="Gender">
        </p>
        <p>
            <label for="BirthDate">Birthday (MM-DD-YYYY): </label>
            <input type ="text" name="BirthDate" id="BirthDate">
        </p>
      
	
        <input type="submit" value="Submit">
    </form>
	
    
    
    
    <?php
	include"connect.php";
	
	
	?>
	
	

	
</body>
</html>
