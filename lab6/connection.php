<?php 
//Set up the database access credentials
$hostname = 'localhost'; 
$username = 'c3513534'; 
$password = 'MyDB87185969'; 
$databaseName = 'c3513534'; 
//Open the database connection - exit with error message otherwise 
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");
?>
