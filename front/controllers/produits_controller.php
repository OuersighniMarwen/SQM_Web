<?php
require_once("models/produit.php");

Class Produitscontroller
{


    public function index()
    {
        $produits = produit::show();
        require_once('views/produits/index.php');
    }

    public function chercher()
    {

        $produits = produit::chercherproduit($_GET['reference']);
        require_once('views/produits/single.php');
    }

    public function Updateproduit() 
      {
        
    $produit =new produit();
    $produit->setreference($_POST['reference']);
    $produit->setnom($_POST['nom']);
    $produit->setprix($_POST['prix']);
    $produit->setstock($_POST['stock']);
    $produit->setsolde($_POST['solde']);
 
    $produit->setcategorie($_POST['categorie']);
           // var_dump($produit);

    $produit->UpdateProduit();
           // var_dump($produit);
            echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               produit modifié  avec 
                <strong class='green'>succès</strong>
                </div>";
            $this->EditProduit();
        }



}

?>
