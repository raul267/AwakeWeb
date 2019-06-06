<?php
session_start();
include ("../model/database.php");
?>

<?php

$idRegion = $_POST['idRegion'];
//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		$sql = mysqli_query($con, "SELECT nombreComuna nombreComuna,idComuna idComuna from comuna join provincia using(idProvincia) join region using(idRegion) where idRegion like '$idRegion'");

    mysqli_close($con);
		while ($r = mysqli_fetch_object($sql))
		{
        echo '<option value="'.$r->idComuna.'">'.$r->nombreComuna.'</option>';
		}

  }

?>
