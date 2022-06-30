<?php
require_once('clientes.php');
$clientes=new clientes();
$rest=$clientes->lista_clientes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista Clientes</title>
	<style>
		h1{
			text-align:center;
			color:white;
			padding: 8px;
			background: black;
		}

		th{
			text-align:center;
			color:#f6f740;
			padding: 8px;
			background: black;
			borde: solid 1px white;

		}

		td{

			padding: 8px;
			border: solid 1px black;

		}
		table{
			width:80%;
			border-collapse: collapse;
			text-align:center;
		}
	</style>

</head>
<body>
	<h1>Lista Clientes</h1>
	<a href="formulario_clientes.php">Nuevo Cliente</a>
	<table align="center">
		<tr>
			<th style="background:#000300;color:whithe;">id</th>
			<th style="background:#000300;color:whithe;">Nombres</th>
			<th style="background:#000300;color:whithe;">Apellidos</th>
			<th style="background:#000300;color:whithe;">Producto Comprado</th>
			<th style="background:#000300;color:whithe;">Acciones</th>
		
		</tr>
		<?php
		foreach ($rest as $r) {
			echo "<tr>

			  <td>{$r['cli_id']}</td>
              <td>{$r['cli_nombres']}</td>
              <td>{$r['cli_apellidos']}</td>
              <td>{$r['cli_producto']}</td>
             <td>

              <a href='formulario_clientes.php?cli_id={$r["cli_id"]}'>
              <img/src='editar.png' >
              </a>

              <a href='acciones_clientes.php?cli_id={$r["cli_id"]}'  onclick='return validar()' >
              <img/src= 'eliminar.png'>
              </a>
              </td>

			</tr>";
		}
			 

		?>
	</table>
</body>
</html>
<script>
	function validar(){ 
		if(confirm("Desea Eliminar")){
			return true;
		}else{
			return false;
		}
	}
</script>