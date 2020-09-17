	
	<?php
			include("actualizar.php");
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>

	<form action="edit.php?iduser=<?php echo $iduser; ?>" method="POST" class="form-insert-date">
		
		
		<p>
		Nombre:<br/>
		<input type="text" name="name" class = "input-text" value ="<?php echo $data['name']; ?>">
		</p>

		<p>
		Apellido:<br/>
		<input type="text" name="last" class = "input-text" value ="<?php echo $data['last']; ?>">
		</p>
		
		<p>
		Numero De Cedula:<br/>
		<input type="text" name="ced" class = "input-text" value ="<?php echo $data['ced']; ?>">
		</p>
		
		<p>
		Numero Tarjeta De Credito:<br/>
		<input type="number" name="card" class = "input-text" value ="<?php echo $data['card']; ?>">
		</p>

		<p><input type="submit" name = "save" class = "btn-submit" value="Actualizar Datos"><a href="index.html"><input type="button" name = "return" class= "btn-return" value="Inicio"></a></p> 
		
	</form>

	
		
</body>
</html>