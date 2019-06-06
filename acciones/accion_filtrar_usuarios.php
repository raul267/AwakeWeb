<?php
session_start();
include ("../model/database.php");
?>

<?php

$idEdificio = $_POST['idEdificio'];
//$data = array();

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Check connection
	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		$sql = mysqli_query($con, "SELECT * FROM usuario join departamento using(idDepartamento) where departamento.idEdificio = '$idEdificio'");

    mysqli_close($con);

		while ($r = mysqli_fetch_object($sql))
		{
        echo '<tr>
                  <td></td>
                 <td>'.$r->rut.'</td>
                <td>'.$r->nombre.'</td>
                <td>'.$r->correo.'</td>
                <td>'.$r->numeroDepartamento.'</td>
              </tr>';

		}

  }

?>
