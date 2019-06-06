
<body  style="background-image: url('assets/img/fondos/login.jpg');">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" method="post" action="?c=Usuario&a=Ingresar">
					<span class="login100-form-title p-b-70">
						Bienvenido
					</span>
					<span class="login100-form text-center">
						<img src="assets/img/logo/awakeLogo.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa el nombre de usuario">
						<input class="input100" type="text" name="rut" id="rut" required oninput="checkRut(this)">
						<span class="focus-input100" data-placeholder="Rut"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Ingresa la contraseña">
						<input class="input100" type="password" name="pass" id="pass">
						<span class="focus-input100" data-placeholder="Contraseña"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" onkeyup="checkRut()">
					</div>

					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								¿Se te olvido el usuario o la contraseña?
							</span>
							<a href="#" class="txt2">
								Recuperala
							</a>

						</li>

						<li>
							<span class="txt1">
								¿No tienes una cuenta?
							</span>

							<a href="?c=Usuario&a=Registrar" class="txt2">
								Registrate
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
