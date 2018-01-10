<?php
    
    session_start();

    include('setDB.php');


    $id = $_POST['uid'];
    $update = "UPDATE asa.useradmin 
        SET fname ='".$_POST['fname']."',
            admin = '".$_POST['admin']."'
        WHERE id = '$id'";
    

    // echo $appdate;


    // echo $insert;
    //echo $insert;

    if($con->query($update)===TRUE)
    {
        header('Location:useradmin.php');
    }
    else
    {
        echo $con->error;
    }
?>