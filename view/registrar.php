
<body  style="background-image: url('assets/img/fondos/login.JPG');">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						¡Registrate!
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa el nombre">
						<input class="input100" type="text" name="nombre">
						<span class="focus-input100" data-placeholder="Ingrese su nombre completo"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa el rut">
						<input class="input100" type="text" name="rut">
						<span class="focus-input100" data-placeholder="Ingrese su rut"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa el correo">
						<input class="input100" type="text" name="correo">
						<span class="focus-input100" data-placeholder="Ingrese su correo electronico"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Selecciona una region">
						<select class="input100" type="text" name="region">
							<option value=""></option>
							<option value="">Metropolitana</option>
							<option value="">otra region</option>
							<option value="">otra otra region</option>
						</select>
						<span class="focus-input100" data-placeholder="Selecciona tu region"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Selecciona una comuna">
						<select class="input100" type="text" name="comuna">
							<option value=""></option>
							<option value="">Providencia</option>
							<option value="">Las condes</option>
							<option value="">Santiago centro</option>
						</select>
						<span class="focus-input100" data-placeholder="Selecciona tu comuna"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa tu direccion">
						<input class="input100" type="text" name="direccion">
						<span class="focus-input100" data-placeholder="Ingresa tu direccion"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa el correo">
						<input type="radio" name="nacionalidad" id="radioChileno" value="chileno" checked>Chileno
						<input style="margin-left:5px;" type="radio" name="nacionalidad" id="radioOtro" value="otro">Otro

					</div>

					<div id="divNacionalidad"></div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Seleciona una foto">
						<label for="">Selecciona una foto de perfil</label>
						<input class="input100" type="file" name="foto">
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Ingresa la contraseña">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Confirma la contraseña"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Ingresa la contraseña">
						<input class="input100" type="password" name="pass2">
						<span class="focus-input100" data-placeholder="Confirme la contraseña"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Registrate
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
