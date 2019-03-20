<!--===============================================================================================-->
	<script src="assetsLogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assetsLogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assetsLogin/vendor/bootstrap/js/popper.js"></script>
	<script src="assetsLogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assetsLogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assetsLogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="assetsLogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assetsLogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assetsLogin/js/main.js"></script>
	<script src="assets/js/validaRut.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#radioOtro").change(function(){
				$("#radioChileno").removeAttr("name");
				$("#divNacionalidad").append('<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa tu nacionalidad"><input class="input100" type="text" name="nacionalidad"><span class="focus-input100" data-placeholder="Ingrese tu nacionalidad"></span></div>');
			});
			$("#radioChileno").change(function(){
				$("#divNacionalidad").empty();
				$("#radioChileno").Attr("name","nacionalidad");
			})
		});
	</script>

</body>
</html>
