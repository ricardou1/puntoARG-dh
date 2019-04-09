<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--HEAD-->
<?php include("head.php"); ?>

<body>
<!--HEADER-->
<?php include("header.php"); ?>

<!-- REGISTRO -->
	<section class="registro2">
		<div class="formulario">

		<form class="registro" action="resultado.php" method="POST">
			<h2>REGISTRO</h2>
			<div class="datosUsuario">
				<p>
					<input id= "usuario" type="usuario" name="usuario" value="" placeholder="Usuario" required>
						<i id="user"class="fas fa-user"></i>

				</p>
			</div>
		<div class="datosUsuario">
			<p>
				<input id= "email" type="email" name="email" value="" placeholder="Email" required>
					<i class="fa fa-envelope fa-lg fa-fw"></i>

			</p>
		</div>

		<div class="datosUsuario">
				<p>
					<input id= "password" type="password" name="password" value="" placeholder="Contraseña"required>
					<i class="fas fa-key"></i>
				</p>
		</div>

		<div class="datosUsuario">
				<p>
				<input id= "password" type="password" name="password" value="" placeholder="Repetir contraseña"required>
					<i class="fas fa-key"></i>
				</p>
		</div>


		<div class="acepta">
			<p>
			Al crear la cuenta aceptas nuestra <a href="#"> política de privacidad.</a> </p>
		</div>

		<div class="captcha">
			<iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lf8DV4UAAAAAASCK2DF67REViA95WPoXf-1vZsH&amp;co=aHR0cHM6Ly93d3cuZGVzcGVnYXIuY29tLmFyOjQ0Mw..&amp;hl=es-419&amp;v=v1552285980763&amp;size=normal&amp;cb=c0u1s2z1hzau" width="304" height="78" role="presentation" name="a-oy8120dsib61" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>

		</div>


		<div class="boton">

		<div id="boton"class="botones">
		<p>
			<input  id= "submit" type="submit" name="enviar" value="Crear cuenta" required>
		</p>

			</div>
				</div>
		</form>
		</div>
	</section>

	<!-- FOOTER -->
<?php include("footer.php"); ?>
</body>
</html>
