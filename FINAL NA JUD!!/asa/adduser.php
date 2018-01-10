<?php
    
    session_start();

    include('setDB.php');


    $username = $_POST['username'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    // $date = strtotime($_POST['appdate']);
    $admin = $_POST['admin'];
    

    // echo $appdate;

    $insert = "INSERT INTO asa.useradmin(username, password, fname, admin) 
        VALUES ('$username', '$password', '$fname', '$admin')";

    // echo $insert;
    //echo $insert;

    if($con->query($insert)===TRUE)
    {
        header('Location:userpage.php');
    }
    else
    {
        echo $con->error;
    }
?>