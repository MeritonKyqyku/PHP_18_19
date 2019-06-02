<?php

session_start();
if($_SESSION['user_id'] != 1){
header("location:http://localhost/INT/formulari.php");

}


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                        <li>
                            <a href="SessionClose.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>

            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Mirsevini</a>
                    </li>
                    <li>
                        <a href="Fshij.php"><i class="fa fa-fw fa-bar-chart-o"></i> Fshij te Regjistuarit</a>
                    </li>
                    <li>
                        <a href="Update.php"><i class="fa fa-fw fa-table"></i> Update Te Regjistuarit</a>
                    </li>
                    <li>
                        <a href="Login.php"><i class="fa fa-fw fa-edit"></i>Login</a>
                    </li>
                    <li>
                      <a href="Eset.php"><i class="fa fa-fw-edit"></i>Eset</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Mirsevini Admin
                            <small>Ballina</small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <?php
                include 'dbConfig.php';
                    echo '<h1>Jeni kyqur si Administrator </h1>';
                    echo '<hr>';
                    echo "<h3>Tabela me te Regjistuarit";

                    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

                    if(!$conn) {
                        die("Database Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "Select * from regjistrimi";

                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0) {
                      echo '<table style="border: 1px solid black; border-collapse: separate;">';
                        while($row = mysqli_fetch_assoc($result)) {

                            echo '<tr style=" border: 1px solid black;padding:4px;">';
                            echo "<td style=' border: 1px solid black;padding:4px;'>" . $row['Rid'] . "</td>";
                            echo "<td style=' border: 1px solid black;padding:4px;'>" . $row['Rname'] . "</td>";
                            echo "<td style=' border: 1px solid black;padding:4px;'>" . $row['Rlastname'] . "</td>";
                            echo "<td style=' border: 1px solid black;padding:4px;'>" . $row['Remail'] . "</td>";
                            echo "<td style=' border: 1px solid black;padding:4px;'>".  $row['Rdatelindja']."</td>";
                            echo "<td style=' border: 1px solid black;padding:4px;'>".  $row['Rvendbanimi']."</td>";
                            echo "<td style=' border: 1px solid black;padding:4px;'>".  $row['Rshkollat']."</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    echo "<hr>";



                    ?>



            </div>
            <!-- /.container-fluid -->


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
