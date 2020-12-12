<?php

 Class reclamation_controller{


   public function savereclamation()//fct ajout
  {
    $reclamation =new reclamation();
    $reclamation->settexte($_POST['texte']);
    $reclamation->settype($_POST['type']);
    $reclamation->setusername($_SESSION['username']);

   
    $reclamation->ajouterreclamation();
    require_once('views/pages/acceuil.php');
   
  }
  public function addreclamation()
  {
    require_once('views/reclamation/recl.php');
  }
   
      public function Index() 
        {
            $reclamations= reclamation::show($_SESSION['username']);
            require_once('views/reclamation/checkout-step-4.php');
        }
    
}
?>
  