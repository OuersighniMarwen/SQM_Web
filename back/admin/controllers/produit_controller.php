<?php
  require_once("modals/produit.php");
 Class produit_controller{


  public function afficher() 
        {
            $produits= produit::show();
            require_once('view/produit/Indexproduit.php');
        }
        public function supprimer() 
        {
          produit::supprimer($_POST['reference']);
            $produits= produit::show();
             echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               produit supprimer  avec 
                <strong class='green'>succès</strong>
                </div>";
            require_once('view/produit/Indexproduit.php');
        }
        public function chercher() {
     
            $produits= produit::chercherproduit($_POST['reference']);
            require_once('view/produit/Indexproduit.php');
    }

    public  function Ajouter() 
        {
         $produits= produit::insert();
         echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               produit ajouter  avec 
                <strong class='green'>succès</strong>
                </div>";
           require_once('view/produit/ajouterproduit.php');
             
        }

         public function Edit() 
        {
           $produits= produit::chercherproduit($_POST['reference']);
            require_once('view/produit/Editproduit.php');
        }
    
    public function Update()
    {
  produit::Update();
            echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               produit modifié  avec 
                <strong class='green'>succès</strong>
                </div>";
}
  //    $produit=new produit($_POST['reference'],$_POST['prix'],$_POST['stock'],$_POST['designation'],$_POST['solde'],$_POST['image'],$_POST['categorie']);
         
           
      
}
?>