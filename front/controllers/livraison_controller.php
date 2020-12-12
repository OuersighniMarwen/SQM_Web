<?php
//session_start();
 require_once("models/panier.php ") ;
 Class livraison_controller{


   public function savelivraison()//fct ajout
  {$today=date("Y-m-d");
  if ($_POST['date']<$today) {
  	
 
                 require_once('views/livraison/checkout-step-2.php');
                 echo "date non valide";}
                 else{


    $livraison =new livraison();
    $livraison->setnumero($_POST['numero']);
    $livraison->setdate($_POST['date']);
    $livraison->setadresse($_POST['adresse']);
    $livraison->setusername($_SESSION['username']);
    $livraison->setregion($_POST['region']);
   
   $idL= $livraison->ajouterlivraison(); 
    foreach($idL as $idL) {$idliv= $idL["id_livraison"] ;}

    Panier::setLIV($idliv,$_GET['id']) ;
               require_once('views/livraison/checkout-step-4.php');}

  }
  public function addlivraison()
  {
    require_once('views/livraison/checkout-step-2.php');
  }
   
      public function Index() 
        {
            $livraisons= livraison::show($_SESSION['username']);
            require_once('views/livraison/checkout-step-4.php');
        }
    
}
?>
  