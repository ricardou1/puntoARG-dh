<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--HEAD-->
<?php include("head.php"); ?>

<body>
<!--HEADER-->
<?php include("header.php"); ?>

<!-- REGISTRO -->

	<div class="registro2">

	<form class="login" action="resultado.php" method="POST">
		<h2>MI CUENTA</h2>
	<div class="contenedor">


	<div class="datosUsuario">
		<p>
			<input id= "email" type="email" name="email" value="" placeholder="Email" required>
			<i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true" required></i>
			</p>
</div>
<div class="datosUsuario">
	<p>
			<input id= "password" type="password" name="password" value="" placeholder="Contraseña"required>
			<i class="fas fa-key" aria-hidden="true" required></i>
			</p>
		</div>
			</div>

		<div class="recuperoContraseña">
		<p> <a href="#">Olvidé mi contraseña</a>  </p>
		</div>

	<div class="boton">

	<div id="boton"class="botones">
	<p>
		<label for="Ingresar"></label>
		<input  id= "submit" type="submit" name="enviar" value="Ingresar" required>
	</p>

		</div>
			</div>
			<div class="crearCuenta">
				<div class="">
					<p>¿No tienes una cuenta?</p>
					<p> <a href="registro.php">CREAR CUENTA</a> </p>
				</div>

			</div>

	</form>
			</div>

	<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>
