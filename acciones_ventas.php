<?php
require_once("ventas.php");
$ventas=new ventas();
$datos=$_REQUEST;
//print_r($datos);
if(empty($datos['ven_id'])){

//die('okk');

$ventas->create($datos['ven_producto'],
	$datos['ven_precio'],
	$datos['ven_comprador']);

}else{///MODIFICO EL ESTUDIANTE

	if( isset($datos['ven_producto'])) { 


	$ventas->update($datos['ven_producto'],
	$datos['ven_precio'],
	$datos['ven_comprador'],$datos['ven_id']);
    }else{ ///ELIMINO

	$ventas->delete($datos['ven_id']);

     }

}
//CODIGO PARA REDIRECCIONAR AL INDEX
header("location:lista_ventas.php");

?>