<?php
  require_once 'model/conn.model.php';

 $action = 'index';

  if(isset($_REQUEST["controller"])){
    $controller = strtolower($_REQUEST["controller"]);
     if( isset($_REQUEST['action'])){
       $action = strtolower($_REQUEST["action"]);
     }

  }else{
    $controller = "login";
  }

  require_once "controller/$controller.controller.php";
  $controller = ucwords($controller).'Controller';
  $controller = new $controller;

  call_user_func(array($controller, $action));


  // VALIDO SI HAY UN MENSAJE
  if(isset($_GET["msn"])){
    echo "<script>alert('".$_GET["msn"]."')</script>";

  }
?>
