<?php
   include("../conn.php");

    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($con, 'utf8');
    // Check connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
            echo '<h1>error</h1>';
        }
        else
        {
            $sql = mysqli_query($con, "SELECT * from menu;");

        mysqli_close($con);
            while ($r = mysqli_fetch_object($sql))
            {
                echo '<h1>Entrada: '.$r->entrada.'|| Principal:'.$r->principal.'|| Postre'.$r->postre.'||</h1>';

            }

        }
?>
