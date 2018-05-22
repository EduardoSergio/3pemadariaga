<?php
?>
<!DOCTYPE html>
<html>
<head>
        <title>Registro de usuarios</title>
        <meta charset='utf-8' />
        <link rel="stylesheet"  type ="text/css" href="css/style.css">
</head>

<body class="rgba-primary-3">
        <h2>Registro de usuarios</h2>
        <p>Completa los datos siguientes: </p>

	<form action="alta.php" method="post">
		<div>
		Nombre:<br/>
		<input type="text" name="nombre" required><br/>
		</div>
		<div>
		Apellido Paterno:<br/>
		<input type="text" name="apellidoPaterno" required><br/>
		</div>
                <div>
                Apellido Materno:<br/>
                <input type="text" name="apellidoMaterno" required><br/>
                </div>
		<div>
		Correo:<br/>
		<input type="text" name="correo" required><br/>
		</div>
                <div>
                Teléfono:<br/>
                <input type="text" name="telefono" required><br/>
                </div>
		<div>
		Usuario:<br/>
		<input type="text" name="usuario" required><br/>
		</div>
		<div>
		Contraseña:<br/>
		<input type="password" name="password" autocomplete="off" required><br/>
		</div>
		<div>
		<input type="submit" value="Enviar">
		</div>
	</form>

<a href="login.php">
Iniciar Sesión</a>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-like" data-href="https://www.facebook.com/UTusovka/" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>

<a href="creditos.php">
Creditos</a>

</body>
</html>
