<?php include_once 'banco.php';
include_once 'persona.php';
$persona = new persona("Pepa" ,"Gomes");
$banco = new banco(1223242,$persona);
$obtenernombre = $banco->getObjpersona()->getNombre();
echo $obtenernombre;