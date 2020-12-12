<?php
session_start ();
  require_once'connexion.php';

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  }  else {
    $controller = 'acceuil';
    $action     = 'acceuil';
  }

  require_once 'views/layout.php';
?>