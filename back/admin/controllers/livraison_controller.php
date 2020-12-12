<?php
  require_once("modals/livraison.php");
class livraison_controller
{


    public function afficher() 
        {
            $livraisons= livraison::show();
            require_once('view/livraison/Indexlivraison.php');
        }
   

           public function supprimer() 
        {
          livraison::supprimer($_POST['id_livraison']);
            $livraisons= livraison::show();
             echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               livraison supprimer  avec 
                <strong class='green'>succès</strong>
                </div>";
            require_once('view/livraison/Indexlivraison.php');
        }
   
 public function chercher() {
     
            $livraisons= livraison::chercherlivraison($_POST['id_livraison']);
            require_once('view/livraison/Indexlivraison.php');
    }
     public function Edit() 
        {
           $livraisons= livraison::chercherlivraison($_POST['id_livraison']);
            require_once('view/livraison/Editlivraison.php');
        }
        public function Update() 
        {
           livraison::Update();
            echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               livraison modifié  avec 
                <strong class='green'>succès</strong>
                </div>";
           
        }

}
?>