
<html>
    <head>
        <title>Administrator Privileges</title>
    </head>
    <body>
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
            <h3> Fshij Aplikimin</h3>
            <form method='post'>
            Fusni Id: <input type='number' size='3' name='Fshij'><input type='submit'>
            </form>


            <?php
            $RidA=$_POST['Fshij'];
            $sql = "Delete from regjistrimi Where Rid='$RidA'";
            

            echo "<h3>Fshhni te gjithe te Regjistuarit</h3>";
            echo "<input type='submit' name='Gj.Fillestare'>";
            if ( isset( $_POST['Gj.Fillestare'] ) ) {

            }




    ?></body>
</html>
