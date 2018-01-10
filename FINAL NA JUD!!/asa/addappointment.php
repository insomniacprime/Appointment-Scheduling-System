<?php
    
    session_start();

    include('setDB.php');


    $appointid = $_SESSION['id'];
    $headerid = $_POST['appwith'];
    $purpose = $_POST['purpose'];
    // $date = strtotime($_POST['appdate']);
    $appdate = $_POST['appdate'];
    $apptime = $_POST['apptime'];

    // echo $appdate;

    $insert = "INSERT INTO asa.appointments(headerid, appointid, purpose, appdate, apptime) 
        VALUES ('$headerid', '$appointid', '$purpose', '$appdate', '$apptime')";

    echo $insert;
    //echo $insert;

    if($con->query($insert)===TRUE)
    {
        header('Location:page.php');
    }
    else
    {
        echo $con->error;
        
    }
?>