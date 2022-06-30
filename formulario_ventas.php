<?php
require_once("ventas.php");
$ventas=new ventas();
if(isset( $_GET['ven_id'])){///DEL EDITAR
	$datos=$ventas->edit( $_GET['ven_id'] );
}else{
$datos['ven_id']=NULL;
$datos['ven_producto']=NULL;
$datos['ven_precio']=NULL;
$datos['ven_comprador']=NULL;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario Ventas</title>
	<style>
		.contenedores{
			margin-top:2px;
			margin-Left:100px;
			
		}
		label{
			width:100px;
			float:left ;
			font-family:Arial;
			font-size: 16px;
			border-bottom:solid 1px #ccc;
		}
	</style>
</head>
<body>
	<h1>Formulario de registro de ventas</h1>

	<form action="acciones_ventas.php" method="POST" >
		<input type="hidden" id="ven_id" name="ven_id" value="<?php echo $datos['ven_id'] ?>" >



		<div class="contenedores" >
			<label for="ven_producto">Producto</label>
			<input type="text" name="ven_producto" id="ven_producto" value="<?php echo $datos['ven_producto'] ?>">
		</div>

		<div class="contenedores" >
			<label for="ven_precio">Precio</label>
			<input type="text" name="ven_precio" id="ven_precio" value="<?php echo $datos['ven_precio'] ?>">
		</div>

		<div class="contenedores" >
			<label for="ven_comprador">Comprador</label>
			<input type="text" name="ven_comprador" id="ven_comprador" value="<?php echo $datos['ven_comprador'] ?>">
		</div>
		
		<div class="contenedores">
		<button>Guardar</button>
	</form>
</body>
</html>



