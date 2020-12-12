<?php

 require_once('bd.php');
   session_start();

   if(!isset($_SESSION['username']))
   {
        
    if (isset($_GET['controller']) && isset($_GET['action']))
     {
    $controller = 'login';
    $action     = 'connect';
  }
  else {
     $controller = 'login';
     $action     = 'login';
         }
         require_once("view/login.php");

 }
   else
   {

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  }
   else {

   $controller = 'index';
    $action     = 'index';
  }
  require_once("view/layout.php");
}
?>

