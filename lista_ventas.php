<?php
require_once('ventas.php');
$ventas=new ventas();
$rest=$ventas->lista_ventas();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista Ventas</title>
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
	<h1>Lista Ventas</h1>
	<a href="formulario_ventas.php">Nuevo Comprador</a>
	<table align="center">
		<tr>
			<th style="background:#000300;color:whithe;">id</th>
			<th style="background:#000300;color:whithe;">Producto</th>
			<th style="background:#000300;color:whithe;">Precio</th>
			<th style="background:#000300;color:whithe;">Comprador</th>
			<th style="background:#000300;color:whithe;">Acciones</th>
		
		</tr>
		<?php
		foreach ($rest as $r) {
			echo "<tr>

			  <td>{$r['ven_id']}</td>
              <td>{$r['ven_producto']}</td>
              <td>{$r['ven_precio']}</td>
              <td>{$r['ven_comprador']}</td>
             <td>

              <a href='formulario_ventas.php?ven_id={$r["ven_id"]}'>
              <img/src='editar.png' >
              </a>

              <a href='acciones_ventas.php?ven_id={$r["ven_id"]}'  onclick='return validar()' >
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