

<!-- Footer Start-->
<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <p>Desarrollado por: <a href="https://tecnoactive.cl"><img src="assets/img/logo/tecnoActive.png"></img></a></p>
                    <br><p style="font-size:6px;">Diseñado por:<a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End-->

<!-- jquery
============================================ -->
<script src="assets/js/vendor/jquery-1.11.3.min.js"></script>
<script src="assets/js/miJavaScript.js" charset="utf-8"></script>
<script src="assets/js/validarPass.js" charset="utf-8"></script>
<!-- bootstrap JS
============================================ -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- meanmenu JS
============================================ -->
<script src="assets/js/jquery.meanmenu.js"></script>
<!-- mCustomScrollbar JS
============================================ -->
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- sticky JS
============================================ -->
<script src="assets/js/jquery.sticky.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="assets/js/jquery.scrollUp.min.js"></script>
<!-- counterup JS
============================================ -->
<script src="assets/js/counterup/jquery.counterup.min.js"></script>
<script src="assets/js/counterup/waypoints.min.js"></script>
<script src="assets/js/counterup/counterup-active.js"></script>
<!-- peity JS
============================================ -->
<script src="assets/js/peity/jquery.peity.min.js"></script>
<script src="assets/js/peity/peity-active.js"></script>
<!-- sparkline JS
============================================ -->
<script src="assets/js/sparkline/jquery.sparkline.min.js"></script>
<script src="assets/js/sparkline/sparkline-active.js"></script>
<!-- flot JS
============================================ -->
<script src="assets/js/flot/jquery.flot.js"></script>
<script src="assets/js/flot/jquery.flot.tooltip.min.js"></script>
<script src="assets/js/flot/jquery.flot.spline.js"></script>
<script src="assets/js/flot/jquery.flot.resize.js"></script>
<script src="assets/js/flot/jquery.flot.pie.js"></script>
<script src="assets/js/flot/Chart.min.js"></script>
<script src="assets/js/flot/flot-active.js"></script>
<!-- map JS
============================================ -->
<script src="assets/js/map/raphael.min.js"></script>
<script src="assets/js/map/jquery.mapael.js"></script>
<script src="assets/js/map/france_departments.js"></script>
<script src="assets/js/map/world_countries.js"></script>
<script src="assets/js/map/usa_states.js"></script>
<script src="assets/js/map/map-active.js"></script>
<!-- data table JS
============================================ -->
<script src="assets/js/data-table/bootstrap-table.js"></script>
<script src="assets/js/data-table/tableExport.js"></script>
<script src="assets/js/data-table/data-table-active.js"></script>
<!--  <script src="assets/js/data-table/bootstrap-table-editable.js"></script>-->
<script src="assets/js/data-table/bootstrap-editable.js"></script>
<script src="assets/js/data-table/bootstrap-table-resizable.js"></script>
<script src="assets/js/data-table/colResizable-1.5.source.js"></script>
<script src="assets/js/data-table/bootstrap-table-export.js"></script>
<!-- main JS
============================================ -->
<script src="assets/js/c3-charts/d3.min.js"></script>
<script src="assets/js/c3-charts/c3.min.js"></script>
<script src="assets/js/c3-charts/c3-active.js"></script>
<script src="assets/js/main.js"></script>


<script type="text/javascript">
$(document).ready(function() {
    $('#table').dataTable({language: {
  url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'}
});});
</script>



<script type="text/javascript">
  var total = 0;
  $("#porcTareas").keyup(function(){
      var alarmas = parseInt(document.getElementById("porcAlarmas").value);
      var tareas = parseInt(document.getElementById("porcTareas").value);
      var usuarios = parseInt(document.getElementById("porcUsuario").value);
      var recorrido =parseInt( document.getElementById("porcRecorrido").value);
      total = alarmas+tareas+usuarios+recorrido;
      if (total > 100)
      {
        alert("La suma de las ponderaciones no puede ser mayor a 100")
      }
  });
  $("#porcAlarmas").keyup(function(){
    var alarmas = parseInt(document.getElementById("porcAlarmas").value);
    var tareas = parseInt(document.getElementById("porcTareas").value);
    var usuarios = parseInt(document.getElementById("porcUsuario").value);
    var recorrido =parseInt( document.getElementById("porcRecorrido").value);
    total = alarmas+tareas+usuarios+recorrido;
    if (total > 100)
    {
      alert("La suma de las ponderaciones no puede ser mayor a 100")
    }
  });
  $("#porcUsuario").keyup(function(){
    var alarmas = parseInt(document.getElementById("porcAlarmas").value);
    var tareas = parseInt(document.getElementById("porcTareas").value);
    var usuarios = parseInt(document.getElementById("porcUsuario").value);
    var recorrido =parseInt( document.getElementById("porcRecorrido").value);
    total = alarmas+tareas+usuarios+recorrido;
    if (total > 100)
    {
      alert("La suma de las ponderaciones no puede ser mayor a 100")
    }
  });
  $("#porcRecorrido").keyup(function(){
    var alarmas = parseInt(document.getElementById("porcAlarmas").value);
    var tareas = parseInt(document.getElementById("porcTareas").value);
    var usuarios = parseInt(document.getElementById("porcUsuario").value);
    var recorrido =parseInt( document.getElementById("porcRecorrido").value);
    total = alarmas+tareas+usuarios+recorrido;
    if (total > 100)
    {
      alert("La suma de las ponderaciones no puede ser mayor a 100")
    }
  });


</script>

</body>

</html>
