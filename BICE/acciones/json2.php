<?php
   include("../conn.php");

    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    mysqli_set_charset($con, 'utf8');
    // Check connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        else
        {
            $sql = mysqli_query($con, "SELECT * from cumpleanos");

        mysqli_close($con);
            while ($r = mysqli_fetch_object($sql))
            {
                echo '<h4 style="border-bottom: solid 1px;">'.$r->nombre.'</h4>';

            }

        }
?>
