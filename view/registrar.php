
<body  style="background-image: url('assets/img/fondos/login.JPG');">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" action="?c=Usuario&a=RegistrarUsuarios" method="post" autocomplete="on" enctype="multipart/form-data">
					<span class="login100-form-title p-b-70">
						¡Registrate!
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Selecciona un tipo de usuario">
						<select class="input100" type="text" name="idTipo" id="idTipo">
							<option value=""></option>
							<?php foreach ($t->listar() as $row): ?>
								<option value="<?php echo $row->idTipo ?>"><?php echo $row->descripcion ?></option>
							<?php endforeach; ?>
						</select>
						<span class="focus-input100" data-placeholder="Selecciona un tipo de usuario"></span>
					</div>
					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa el nombre">
						<input class="input100" type="text" name="nombre" id="nombre">
						<span class="focus-input100" data-placeholder="Ingrese su nombre completo"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa el rut">
						<input class="input100" type="text" name="rut" id="rut">
						<span class="focus-input100" data-placeholder="Ingrese su rut"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa el correo">
						<input class="input100" type="text" name="correo" id="correo">
						<span class="focus-input100" data-placeholder="Ingrese su correo electronico"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa tu fecha de nacimiento">
						<label style="color:grey;">Ingresa tu fecha de nacimeinto</label>
						<input class="input100" type="date" name="fechaNacimiento" id="fechaNacimiento">

					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Selecciona una region">
						<select class="input100" type="text" name="idRegion" id="idRegion">
							<option value=""></option>
							<?php foreach ($r->listar() as $row): ?>
								<option value="<?php echo $row->idRegion ?>"><?php echo $row->nombreRegion ?></option>
							<?php endforeach; ?>
						</select>
						<span class="focus-input100" data-placeholder="Selecciona tu region"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Selecciona una comuna">
						<select class="input100" type="text" name="idComuna" id="idComuna">
							<option value=""></option>
							<?php foreach ($c->listar() as $row): ?>
								<option value="<?php echo $row->idComuna ?>"><?php echo $row->nombreComuna ?></option>
							<?php endforeach; ?>
						</select>
						<span class="focus-input100" data-placeholder="Selecciona tu comuna"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa tu direccion">
						<input class="input100" type="text" name="direccion" id="direccion">
						<span class="focus-input100" data-placeholder="Ingresa tu direccion"></span>
					</div>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Ingresa el correo">
						<input type="radio" name="nacionalidad" id="radioChileno" value="Chilena/o" checked>Chileno
						<input style="margin-left:5px;" type="radio" name="nacionalidad" id="radioOtro" value="otro">Otro

					</div>

					<div id="divNacionalidad"></div>

					<input class="input100" type="file" name="fotoPerfil" id="fotoPerfil">
					<div class="wrap-input100 validate-input m-b-50" data-validate="Seleciona una foto">
						<label for="">Selecciona una foto de perfil</label>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Ingresa la contraseña">
						<input class="input100" type="password" name="password" id="password">
						<span class="focus-input100" data-placeholder="Confirma la contraseña"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Ingresa la contraseña">
						<input class="input100" type="password" name="password2" id="password2">
						<span class="focus-input100" data-placeholder="Confirme la contraseña"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" value="Registrar">
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
