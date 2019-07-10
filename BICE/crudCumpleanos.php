<?php
  require_once 'conn.php';
  $con = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
  mysqli_set_charset($con, 'ISO-8859-1');
  $sql = mysqli_query($con, "select * from cumpleanos");
  mysqli_close($con);

 ?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="css/miCss.css">


        <title>Cumpleañeros</title>
    </head>
    <body>
      <div class="row">
          <div class="col-md-8 col-sm-12" style="background-color:rgb(255,255,255,0.9);">
            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                <thead>
                    <tr>
                        <th data-field="state" data-checkbox="true"></th>
                        <th data-field="Edificio" data-editable="true">Nombre</th>
                        <th data-field="Descripcion" data-editable="true">fecha</th>
                        <th data-field="Fecha" data-editable="true">Editar</th>
                        <th data-field="Eliminiar" data-editable="true">Eliminiar</th>

                    </tr>
                </thead>
                <tbody>
                  <?php
                  while ($row = mysqli_fetch_object($sql))
                  {?>
                    <tr>
                      <td></td>
                      <td><?php echo $row->nombre; ?></td>
                      <td><?php echo $row->fecha; ?></td>
                      <td><a href="">Editar</a></td>
                      <td><a href="">Eliminar</a></td>
                    </tr>
                  <?php } ?>

                </tbody>
            </table>
          </div>
      </div>

  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="../assets/js/data-table/bootstrap-table.js"></script>
  <script type="text/javascript">

  </script>
</body>
</html>
