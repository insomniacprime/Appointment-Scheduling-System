<?php
    
    session_start();

    include('setDB.php');


    // $appointid = $_SESSION['id'];
    // $headerid = $_POST['appwith'];
    // $purpose = $_POST['purpose'];
    // // $date = strtotime($_POST['appdate']);
    // $appdate = $_POST['appdate'];
    // $apptime = $_POST['apptime'];

    // echo $appdate;
    $id = $_POST['appid'];
    $update = "UPDATE asa.appointments 
        SET headerid ='".$_POST['appwith']."',
            purpose = '".$_POST['purpose']."',
            appdate = '".$_POST['appdate']."',
            apptime = '".$_POST['apptime']."'
        WHERE id = '$id'";

    echo $update;
    //echo $insert;

    if($con->query($update)===TRUE)
    {
        header('Location:view.php');
    }
    else
    {
        echo $con->error;
        
    }
?>