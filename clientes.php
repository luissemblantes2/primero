<?php
require_once('Conection.php');
class clientes extends Conection{

 function lista_clientes(){
 $resultado=$this->con->query("SELECT * FROM clientes ");
 return $resultado->fetch_all(MYSQLI_ASSOC);//
 }
 function create($cli_nombres,$cli_apellidos,$cli_producto){
    return $this->con->query("INSERT INTO clientes (cli_nombres,
                                             cli_apellidos,
                                             cli_producto)
                                            values('$cli_nombres',
                                                   '$cli_apellidos',
                                                   '$cli_producto')
                                                


        ");

 }
 function edit($cli_id){
    $resultado=$this->con->query("SELECT * FROM clientes WHERE cli_id=$cli_id ");
    return $resultado->fetch_all(MYSQLI_ASSOC)[0];

 }

function update($cli_nombres,$cli_apellidos,$cli_producto,$cli_id){
    $this->con->query("UPDATE clientes 
        SET cli_nombre='$cli_nombres',
        cli_apellidos='$cli_apellidos',
        cli_ciudad='$cli_producto'
        WHERE cli_id=$cli_id

        ");
}
function delete($cli_id){ 
    $this->con->query("DELETE FROM clientes WHERE cli_id=$cli_id");


}


}

?>