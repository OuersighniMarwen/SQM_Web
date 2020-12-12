<?php
  require_once("modals/reclamation.php");
class reclamation_controller
{


    public function afficher() 
        {
            $reclamations= reclamation::show();
            require_once('view/reclamation/Indexreclamation.php');
        }
   

           public function supprimer() 
        {
          reclamation::supprimer($_POST['id_reclamation']);
            $reclamations= reclamation::show();
             echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               reclamation supprimer  avec 
                <strong class='green'>succès</strong>
                </div>";
            require_once('view/reclamation/Indexreclamation.php');
        }
   
 public function chercher() {
     
            $reclamations= reclamation::chercherreclamation($_POST['id_reclamation']);
            require_once('view/reclamation/Indexreclamation.php');
    }
   

}
?>