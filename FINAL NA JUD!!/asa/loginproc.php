<?php
    
    session_start();

    include('setDB.php');

    $uname = $_POST['username'];
    $pword = $_POST['password'];

    $sql = "SELECT * FROM asa.useradmin WHERE username='". $uname ."' AND password= '". $pword ."'";
    $res = $con->query($sql);


    // if (!$sql || mysql_num_rows($result) ==0)
    
    echo mysql_error;

    if($res->num_rows >0)
    {
        $row = $res->fetch_assoc();
        if($row['admin']==1)
        {
            $_SESSION['id'] = $row['id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['uname'] = $row['username'];
            $_SESSION['admin'] = $row['admin'];
            $_SESSION['adminurl'] = 'adminpage.php';
            header('Location: adminpage.php');
        }
        else
        {
            $_SESSION['id'] = $row['id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['uname'] = $row['username'];
            $_SESSION['admin'] = $row['admin'];
            $_SESSION['adminurl'] = 'view.php';
            header('Location:page.php');
        }
    }
    else
    {

        
    }

?>