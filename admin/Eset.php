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
                <a class="navbar-brand" href="index.html">Admin</a>
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
                            <small>Eset</small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->


                <?php

                $myfile = fopen("../ese/Meriton.txt", "r") or die("Unable to open file!");
                echo fread($myfile,filesize("../ese/Meriton.txt"));
                fclose($myfile);
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
