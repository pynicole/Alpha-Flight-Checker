# Alpha-Flight-Checker
A CRUD pseudo flight checker website using MySQL databases, PHP, and HTML/CSS

To open via your localhost:

1. Make sure to download and install Apache Friends XAMPP https://www.apachefriends.org/
2. Once downloaded and setup is complete, open XAMPP control panel and click 'Start' for Apache and MySQL.
3. If started correctly, the Apache and MySQL modules should be highlighted green. Then click on the 'Admin' button for MYSQL and phpMyAdmin should pop up in a default window. This is where your data will be stored.
4. Create a new folder called 'alphaflightchecker'
5. Click on the 'Import' button and open the 'alphaflightchecker.sql' file that was downloaded within this file.
6. Now you should see four starter databases: 'airplane', 'flight', 'passenger', and 'passengerticket'
7. Then go into your file system.
8. Find the folder where XAMPP was downlaoded. (For windows, it should be in "C:\xampp")
9. Then double click the folder and find 'htdocs'
10. Make a new folder in there called 'alphaflightchecker'
11. Put all the downloaded files from the 'src' folder of this repository into that newly created folder.
12. From there, open a new tab and type in localhost/htdocs/index.php
13. This should open up the first page of the website!




           
					 	
TIPS ON HOW TO USE:
- In your phpMyAdmin, you will see the last names of fake people in the 'passenger' database.
- To test it out, you can enter any last name in that database to check the flight information for that person.
- Or you can create a new user by entering the last name of the person you want to create.
- From there, it will tell you you don't have any flights and you can add one.
- Fill out the new user form and then from there you can add a flight.
- For completing the new flight form, make sure to copy your member ID to fill in.
- For the last question ('Airplane ID: ") you can check the list of airplanes in the 'airplane' database.
- Lastly if you want to delete a flight from a user, enter their last name, remeber the flight number you want to delete, click the delete button, enter the flight number, and it will delete that flight information.
