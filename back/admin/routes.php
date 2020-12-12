<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
    	case 'evenement':
      $controller = new evenementController();
      break;
      case 'promotion':
        $controller = new promotionController();
      break;
       case 'index':
        $controller = new index_controller();
      break;
      case 'client':
      require_once ("modals/Client.php");
        $controller = new client_controller();
      break;
      case 'login':
      require_once ("modals/login.php");
        $controller = new login_controller();
      break;
       case 'blog':
      require_once ("modals/blog.php");
        $controller = new blog_controller();
      break;
       case 'commande':
      require_once ("modals/commande.php");
        $controller = new commande_controller();
      break;
       case 'livraison':
      require_once ("modals/livraison.php");
        $controller = new livraison_controller();
      break;
          case 'reclamation':
      require_once ("modals/reclamation.php");
        $controller = new reclamation_controller();
      break;
           case 'produit':
      require_once ("modals/produit.php");
        $controller = new produit_controller();
      break;
        case 'livreur':
      require_once ("modals/livreur.php");
        $controller = new livreur_controller();
      break;

    
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('promotion' => ['afficheprod','ajout', 'proajout','proproduit','proajouter','prosup','promod','procher','proaff', 'modifier','chercherpro'],'index' => ['index'],'client'=> ['recherche','active','desactive','afficher','supprimer','chercher'],'login' => ['connect','logout','login'],'blog' => ['recherche','afficher','supprimer','chercher','Ajouter','Edit','Update'],'commande' => ['afficher','affichage','supprimer','chercher','Edit','Update'],'livraison' => ['afficher','supprimer','chercher','Edit','Update'],'reclamation' => ['afficher','supprimer','chercher'],'produit' => ['afficher','supprimer','chercher','Ajouter','Edit','Update'],'livreur'=>['affichage1'],'evenement' => ['evajout','evaff','evmodifier','modi','evsup'] 
                        );


  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>