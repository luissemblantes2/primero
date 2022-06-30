<?php
require_once("clientes.php");
$clientes=new clientes();
$datos=$_REQUEST;
//die(print_r($datos));
if(empty($datos['cli_id'])){

//die('okk');

$clientes->create($datos['cli_nombres'],
	$datos['cli_apellidos'],
	$datos['cli_producto']);

}else{///MODIFICO EL ESTUDIANTE

	if( isset($datos['cli_nombres'])){ //MODIFICO


	$clientes->update($datos['cli_nombres'],
	$datos['cli_apellidos'],
	$datos['cli_producto'],$datos['cli_id']);



    }else{ ///elimino
    	//die(($datos['cli_id']));
	$clientes->delete($datos['cli_id']);

     }

}
//CODIGO PARA REDIRECCIONAR AL INDEX
header("location:lista_clientes.php");

?>