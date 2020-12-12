<?php
  class evenementController {

   

     public function evajout() {
      require_once"modals/classe_promotion.php";
      require_once"modals/classe_evenement.php";
      require_once"bd.php";
      evenement::insertev();  
      require_once('view/admin/evajout.php');
    }
public function modi() {
 require_once"modals/classe_promotion.php";
      require_once"modals/classe_evenement.php";
      require_once"bd.php";
      evenement::evmodi();
      
       $s = evenement::afficherev();
      ?> 
      <script> document.location.href = 'index.php?controller=evenement&action=evaff'; </script>

      <?php
    }

public function evsup() {
      require_once"modals/classe_promotion.php";
      require_once"modals/classe_evenement.php";
      require_once"bd.php";
      evenement::sup($_POST['evid']);
       $s = evenement::afficherev();

      
      echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               evenement supprimer  avec 
                <strong class='green'>succès</strong>
                </div>";
      
      require_once('view/admin/evsup.php');
    }



    public function evaff() {
      require_once"modals/classe_promotion.php";
      require_once"modals/classe_evenement.php";
      require_once"bd.php";
      $s = evenement::afficherev();

      
      require_once('view/admin/evaff.php');
    }

    public function evmodifier() {
  
      require_once"modals/classe_promotion.php";
      require_once"modals/classe_evenement.php";
      require_once"bd.php";
      
      require_once('view/admin/evmod.php');
   
    
    }




  }
?>