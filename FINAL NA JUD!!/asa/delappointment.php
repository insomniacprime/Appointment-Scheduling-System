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
    $id = $_GET['id'];
    $delete = "DELETE FROM asa.appointments WHERE id = '$id'";

    echo $delete;
    //echo $insert;

    if($con->query($delete)===TRUE)
    {
        header('Location:view.php');
    }
    else
    {
        echo $con->error;
        
    }
?>