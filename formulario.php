<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<form action="formulario.php" method="POST" class="form-insert-date">
		
		<?php
			include("check.php");
		?>
		<p>
		Nombre:<br/>
		<input type="text" name="name" class = "input-text" placeholder = "Escribe un nombre">
		</p>

		<p>
		Apellido:<br/>
		<input type="text" name="last" class = "input-text" placeholder = "Escribe un apellido">
		</p>
		
		<p>
		Numero De Cedula:<br/>
		<input type="text" name="ced" class = "input-text" placeholder = "Digita un numero de cedula">
		</p>
		
		<p>
		Numero Tarjeta De Credito:<br/>
		<input type="number" name="card" class = "input-text"s placeholder = "Introduce un numero de tarjeta">
		</p>

		<p><input type="submit" name = "save" class = "btn-submit" value="Guardar Datos"><a href="index.html"><input type="button" name = "return" class= "btn-return" value="Inicio"></a></p> 
		
	</form>

	
		
</body>
</html>