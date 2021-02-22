<?php
include_once 'Controller/productoController.php';
include_once 'Config/conexion.php';
$Controller = new productoController();

if(!isset($_REQUEST['c'])){
    $Controller->index();
}else{
    $action = $_REQUEST['c'];
    call_user_func(array($Controller,$action));
}
?>