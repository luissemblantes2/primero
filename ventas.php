<?php
require_once('Conection.php');
class ventas extends Conection{

 function lista_ventas(){
 $resultado=$this->con->query("SELECT * FROM ventas ");
 return $resultado->fetch_all(MYSQLI_ASSOC);//
 }  
 function create($ven_producto,$ven_precio,$ven_comprador){
    return $this->con->query("INSERT INTO ventas (ven_producto,
                                             ven_precio,
                                             ven_comprador)
                                            values('$ven_nombre',
                                                   '$ven_precio',
                                                   '$ven_comprador')
                                                


        ");

 }
 function edit($ven_id){
    $resultado=$this->con->query("SELECT * FROM ventas WHERE ven_id=$ven_id ");
    return $resultado->fetch_all(MYSQLI_ASSOC)[0];

 }

function update($ven_producto,$ven_precio,$ven_comprador,$ven_id){
    $this->con->query("UPDATE ventas 
        SET ven_producto='$ven_producto',
        ven_precio='$ven_precio',
        ven_comprador='$ven_comprador'
        WHERE ven_id=$ven_id

        ");
}
function delete($ven_id){ 
    $this->con->query("DELETE FROM ventas WHERE ven_id=$ven_id");


}


}

?>