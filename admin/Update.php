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

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="index.php">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
                          Perditso te Regjistuarit
                            <small>Jepni Numrin e ID</small>
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
                            echo "<td style=' border: 1px solid black;padding:4px;'>". $row['Remail'] . "</td>";
                            echo "<td style=' border: 1px solid black;padding:4px;'>".  $row['Rdatelindja']."</td>";
                            echo "<td style=' border: 1px solid black;padding:4px;'>".  $row['Rvendbanimi']."</td>";
                            echo "<td style=' border: 1px solid black;padding:4px;'>".  $row['Rshkollat']."</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }?>

                    <form method='post'>
                      <br><hr><br>
                      <form>
                    Fusni Id:<input type='number' size='3' name='ID'><input type='submit' name="ID" value="ID"><br>
                    Ndrysho Emrin: <input type="text"  name="Emri"><input type="submit"><br>
                    Ndrysho Mbiemrin: <input type="text" name="Mbiemri"><input type="submit"><br>
                    Ndrysho Vendbanimin: <input type="text"  name="Vendbanimi"><input type="submit" ><br>
                    Ndrysho Datelindjen: <input type="date"  name="Datelindja" ><input type="submit"><br>
                    Ndrysho Emailin: <input type="email"  name="Emaili"><input type="submit"><br>
                    Ndrysho Shkollat: <input type="text"  name="Shkollat"><input type="submit"><br>

                    </form>


                    <?php
                    if((isset($_POST['Emri']))&&(isset($_POST['ID']))){
                     $UEmri=$_POST['Emri'];
                     $UEID=$_POST['ID'];
                     $sql = "Update regjistrimi set Rname='$UEmri' Where Rid='$UEID' ";
                     $result = mysqli_query($conn,$sql);
                     }
                    elseif((isset($_POST['Mbiemri']))&&(isset($_POST['ID']))){
                      $UMbi=$_POST['Mbiemri'];
                      $UEID=$_POST['ID'];
                      $sql1 = "Update regjistrimi set Rlastname='$UMbi' Where Rid='$UEID' ";
                      $result = mysqli_query($conn,$sql1);
                      }
                    elseif((isset($_POST['Vendbanimi']))&&(isset($_POST['ID']))){
                     $UVend=$_POST['Vendbanimi'];
                     $UEID=$_POST['ID'];
                     $sql2 = "Update regjistrimi set Rvendbanimi='$UVend' Where Rid='$UEID' ";
                     $result = mysqli_query($conn,$sql2);
                   }
                     elseif((isset($_POST['Datelindja']))&&(isset($_POST['ID']))){
                      $UDate=$_POST['Datelindja'];
                      $UEID=$_POST['ID'];
                      $sql3 = "Update regjistrimi set Rdatelindja='$UDate' Where Rid='$UEID' ";
                      $result = mysqli_query($conn,$sql3);
                    }
                      elseif((isset($_POST['Emaili']))&&(isset($_POST['ID']))){
                       $UEmail=$_POST['Emaili'];
                       $UEID=$_POST['ID'];
                       $sql4 = "Update regjistrimi set Remail='$UEmail' Where Rid='$UEID' ";
                       $result = mysqli_query($conn,$sql4);
                     }
                       elseif((isset($_POST['Shkollat']))&&(isset($_POST['ID']))){
                        $UShkoLLAT=$_POST['Shkollat'];
                        $UEID=$_POST['ID'];
                        $sql5 = "Update regjistrimi set Rshkollat='$UShkoLLAT' Where Rid='$UEID' ";
                        $result = mysqli_query($conn,$sql5);
                      }

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
