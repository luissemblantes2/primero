<?php
class Operaciones
{

public $n1;
public $n2;
public $resultado;

  function __construct(){
    $this->n1=10;
    $this->n2=25;
    $this->n3=10;
    $this->n4=25;
 }

 function sumar(){
return $this->resultado=$this->n1+$this->n2;
}

function restar(){
return $this->resultado=$this->n3-$this->n4;
}
    
}

$Operaciones=new Operaciones();
echo $Operaciones->sumar();

$Operaciones=new Operaciones();
echo $Operaciones->restar();

?>