<?php

 Class panier_controller{

  public function addpanier()
  {
    require_once("views/panier/single-product.php");
  }
   public function Editpanier() 
        {
    $panier =new panier();
        
    $prod=$panier->getproduit($_GET['reference']) ;

    foreach ($prod as $prod) 
    {
      $prix=$prod['prix'] ;
      $nom=$prod['nom'] ;
    }
 
$exist=0 ;
      if(!empty($_SESSION["cart_item"]))
      {
        foreach($_SESSION["cart_item"] as $k => $v) 
        {
          if($_GET["reference"]==$_SESSION["cart_item"][$k]["reference"])
          {
            $_SESSION["cart_item"][$k]["quantite"] += $_POST["quantite"];
            $_SESSION["cart_item"][$k]["subtot"]=$prix * $_SESSION["cart_item"][$k]["quantite"] ;
            $exist=1 ;
          }
        }
        if($exist==0)
        {
          $subtot=$prix * $_POST["quantite"] ;
          array_push($_SESSION["cart_item"], array( 'reference'=>$_GET["reference"],'nom'=>$nom, 'prix'=>$prix ,'size'=>$_POST["size"],'quantite'=>$_POST["quantite"],'subtot'=>$subtot));
        }

      }else { $subtot=$prix * $_POST["quantite"] ;
          array_push($_SESSION["cart_item"], array( 'reference'=>$_GET["reference"],'nom'=>$nom, 'prix'=>$prix ,'size'=>$_POST["size"],'quantite'=>$_POST["quantite"],'subtot'=>$subtot));
            }
            require_once("views/panier/cart-page.php");
        }

function checkout1()
{
  $panier =new Panier();
    $panier->setusername($_SESSION["username"]); 
    $panier->setprixTOT($_GET["PrixTot"]); 
$today = date("d/m/y , H:i:s");  $panier->setdate($today);$_POST["date"] =$today ;
    $panier->setetat("0");
    $id=$panier->ValiderCommande() ;  
    foreach($id as $id) {$i= $id["id"] ;}

    $_POST["ID"] =$i ;
    foreach($_SESSION["cart_item"] as $item) 
    {
        Panier::Validerligne($i,$item["reference"],$item["quantite"],$item["size"],$item["subtot"]) ;
    }

   require_once("views/panier/checkout-step-1.php");
}
   
function initPanier()
{
  if(!isset($_SESSION["cart_item"]))
  {
    $_SESSION["cart_item"][]= array('reference','nom', 'prix' ,'size','quantite');
   
  }
  $item_total = 0;
}

function  supprimerPanier()
{
  unset($_SESSION["cart_item"]);
  $item_total = 0; 
  $_SESSION["cart_item"]= array();
  require_once("views/panier/cart-page.php");
}

function nbProduitsDuPanier()
{
  $n = 0;
  if(isset($_SESSION['produits']))
  {
  $n = count($_SESSION['produits']);
  }
  return $n;
}

function supprimerArticle()
{
   
    if(!empty($_SESSION["cart_item"])) {
    foreach($_SESSION["cart_item"] as $k => $v) {
      if($_GET["reference"] ==$_SESSION["cart_item"][$k]["reference"]) 
        unset($_SESSION["cart_item"][$k]);        
    }
  }

    require_once("views/panier/cart-page.php");
}

function confirmerCommande()
{
   Panier::confirmer($_GET["id"]) ; 
   unset($_SESSION["cart_item"]);
  $item_total = 0; 
  $_SESSION["cart_item"]= array();
    require_once("views/livraison/checkout-step-2.php");
}

function checkoutCOMPLETE ()
{
  require_once("views/panier/checkout-complete.php");
}

}
?>
  