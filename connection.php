<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="my_db";


$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>