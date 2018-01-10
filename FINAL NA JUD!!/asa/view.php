<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Appointment Scheduling Appp</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php 
        include('nav.php');
        include('setDB.php');

        $id = $_SESSION['id'];

        
        $select = "SELECT appointments.*, useradmin.id as uid, useradmin.fname FROM asa.appointments
            INNER JOIN asa.useradmin ON appointments.headerid = useradmin.id
            WHERE appointments.appointid = $id";
        
        $result = $con->query($select);



        // echo $select;
    ?>


    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $_SESSION["fname"]; ?></h1>

                </div>
                <!-- /.col-lg-12 -->

                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Appointment Created
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Appointment with</th>
                                        <th>Purpose</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                if($result->num_rows >0)
                                {
                                    while($row = $result->fetch_assoc())
                                    {
                                        echo "<tr class='odd gradeX'>";
                                            echo "<td>" .$row['fname']."</td>";
                                            echo "<td>" .$row['purpose']."</td>";
                                            echo "<td>" .$row['appdate']."</td>"; 
                                            echo "<td>" .$row['apptime']."</td>";
                                            echo "<td>
                                                    <a href=editpage.php?id=". $row['id'] ." class='btn btn-sm btn-success'>Edit</a>
                                                    <a href=delappointment.php?id=". $row['id'] ." class='btn btn-sm btn-success'>Delete</a>
                                                </td>";
                                            // <td>Meeting with sales and marketing to produce solutions</td>
                                            // <td>January 6, 2018</td>
                                            // <td class="center">3:30 PM</td>
                                            // <td class="center">Acknowledge</td>
                                        echo "</tr>";
                                    }
                                }
                                    
                                ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <a href="page.php" class="btn btn-lg btn-success">Back</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
