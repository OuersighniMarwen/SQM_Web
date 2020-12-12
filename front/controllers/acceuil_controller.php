<?php

class acceuil_controller {
public function acceuil()
{
  require_once "views/pages/acceuil.php";
}
public function about()
{
  require_once "views/pages/aboutus.php";
}
public function blog()
{
  require_once "views/Client/blog-single-index.php";
}
}


?>