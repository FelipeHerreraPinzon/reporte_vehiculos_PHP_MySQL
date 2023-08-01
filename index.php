<?php


include ('Model/Model_Conductor.php');
include ('Model/Model_Propietario.php');
include ('Model/Model_Vehiculo.php');
include ('Model/Model_Informe.php');



include ('Controller/Controller.php');


include ('Config/Conexion.php');


$controller = new Controller();


if(!isset($_REQUEST['c'])){
    $controller->vehiculos();
}else{
  $action = $_REQUEST['c'];
    call_user_func(array($controller,$action));
   
}



?>