<?php
require 'Mailer/PHPMailerAutoload.php';
  class promotionController {

   

     public function proajout() {
      require_once"modals/classe_promotion.php";
      require_once"modals/classe_evenement.php";
      require_once"bd.php";
      promotion::insert();
       

      
      require_once('view/admin/proajout.php');
    }

    public function proproduit() {
      require_once"modals/classe_promotion.php";
      require_once"modals/produitt.php";
      require_once"bd.php";
      if(isset($_POST['tab']))
      {

        $tab = $_POST['tab'];
        $id = $_POST['proID'];
         $type = $_POST['protype'];
           $pourcentage = $_POST['propourcentage']; 
             $nom = $_POST['pronom'];
               $debut = $_POST['prodebut'];
                 $fin= $_POST['profin'];
        foreach ($tab as $val) 
        {
          if(isset($val['check']))
           {
            if($val['check']=='on')
            {
             
              promotion::affecterPromo($id,$val['reference']);
              promotion::envoie_mail();
            }
           }   
        }
      }

      
    }


    public function afficheprod()
    {
      require_once"modals/classe_promotion.php";
      require_once"modals/produitt.php";
      require_once"bd.php";
      $proID=$_GET['proID'];
      $produits = promotion::afficheProduit($proID);
      $pourcent = $_GET['propourcentage'];

     require_once("view/produit/produitenpromo.php");
    }

    public function proajouter() {
      require_once"modals/classe_promotion.php";
      require_once"modals/produitt.php";
      require_once"bd.php";
      $prod =  new produit("","",0,0,"",0,"","");
      $produits = $prod->all();
      
     require_once("view/produit/Indexproduit.php");
     
      
    }


    public function prosup() {
      require_once"modals/classe_promotion.php";
      require_once"modals/classe_evenement.php";
      require_once"bd.php";
      promotion::sup($_POST['proID']);
       $s = promotion::affichage();

      
      echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               promotion supprimer  avec 
                <strong class='green'>succès</strong>
                </div>";
      
      require_once('view/admin/prosup.php');
    }

    public function promod() {
      require_once"modals/classe_promotion.php";
      require_once"modals/classe_evenement.php";
      require_once"bd.php";
      
      require_once('view/admin/promod.php');
    }

    public function modifier() {
 require_once"modals/classe_promotion.php";
      require_once"modals/classe_evenement.php";
      require_once"bd.php";
      promotion::mod();
      
      $s = promotion::affichage();
      ?> 
      <script> document.location.href = 'index.php?controller=promotion&action=proaff'; </script>

      <?php
    }

    public function procher() {
      require_once"modals/classe_promotion.php";
      require_once"modals/classe_evenement.php";
      require_once"bd.php";
      promotion::chercher();
      
      require_once('view/admin/procher.php');
    }


    public function chercherpro() {

      require_once"modals/classe_promotion.php";
      require_once"modals/classe_evenement.php";
      require_once"bd.php";
     
    $s=promotion::chercherpro($_POST['pronom']);


      
      require_once('view/admin/proaff.php');
    }

    public function proaff() {
      require_once"modals/classe_promotion.php";
      require_once"modals/classe_evenement.php";
      require_once"bd.php";
      $s = promotion::affichage();

      
      require_once('view/admin/proaff.php');
    }



  }
?>