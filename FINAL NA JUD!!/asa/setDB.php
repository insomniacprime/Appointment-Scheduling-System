<?php 
	$server = "localhost";
    $database = "asa";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>