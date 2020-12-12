<?php
  require_once("modals/commande.php");
class commande_controller
{


    public function afficher() 
        {
            $commandes= commande::show();
            require_once('view/commande/Indexcommande.php');
        }
   

           public function supprimer() 
        {
          commande::supprimer($_POST['id']);
            $commandes= commande::show();
             echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               commande supprimer  avec 
                <strong class='green'>succès</strong>
                </div>";
            require_once('view/commande/Indexcommande.php');
        }
   
 public function chercher() {
     
            $commandes= commande::cherchercommande($_POST['id']);
            require_once('view/commande/Indexcommande.php');
    }
     public function Edit() 
        {
           $commandes= commande::cherchercommande($_POST['id']);
            require_once('view/commande/EditCommande.php');
        }
        public function Update() 
        {
           commande::Update();
            echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               commande modifié  avec 
                <strong class='green'>succès</strong>
                </div>";
           
        }
        public function affichage() {
     
            $commandes= commande::show1($_POST['id']);
            require_once('view/commande/detail.php');
    }

}
?>