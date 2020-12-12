<?php

 Class livreur_controller{
	 public function affichage1()
  {
   $livreurs=livreur  :: afficherr ($_POST['region']);
    require_once("view/livraison/livreurs.php");
  }
 }
 ?>