<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Consulta</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

	<form action="bus.php" method="POST" class="form-bus">
		<input type="text" name="busqueda" class="cam-search" id = "busqueda" placeholder="Buscar...">
		<input type="submit" value="Buscar" class="btn-bus">
        <a href="formulario.php"><input type="button" value="Insertar" class="btn-ins"></a>
	</form>

    <table  class="table-stacks">
    	<tr class="table-tr">
    		<td class="table-td-one-color">Cedula</td>
    		<td class="table-td-one-color">Nombre</td>
    		<td class="table-td-one-color">Apellido</td>
    		<td class="table-td-one-color">Tarjeta de credito</td>
    		<td class="table-td-one-color">Opciones</td>
    	</tr>

    	

    </table>
</body>
</html>