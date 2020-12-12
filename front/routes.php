<?php

  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'client':
      require_once("models/Client.php");
      $controller= new client_controller();
      break;
       case 'acceuil':
      $controller= new acceuil_controller();
      break;
       case 'blog':
      require_once("models/blog.php");
      $controller= new blog_controller();
      break;
      case 'panier':
      require_once("models/panier.php");
      $controller= new panier_controller();
      break;
       case 'produits':
        // we need the model to query the database later in the controller
        require_once('models/produit.php');
        $controller = new ProduitsController();
      break;
       case 'livraison':
      require_once("models/livraison.php");
      $controller= new livraison_controller();
      break;
      case 'reclamation':
      require_once("models/reclamation.php");
      $controller= new reclamation_controller();
      break;
       case 'promotion':
        $controller = new promotionController();
      break;
      case 'evenement':
      $controller = new evenementController();
      break;
    }

    $controller->{ $action }();
  }
  // we're adding an entry for the new controller and its actions
  $controllers = array('client' => ['mdp','oublier','Index','addClient','saveClient','EditClient','UpdateClient','connect','logout'],
    'blog' => ['Index','addblog','saveblog','supprimer'],
    'acceuil' => ['acceuil','blog','about'],'produits' => ['index', 'chercher'],'panier'=> ['addpanier','Editpanier','supprimerPanier','supprimerArticle','checkout1','confirmerCommande','checkoutCOMPLETE'],'livraison' => ['savelivraison','Index','addlivraison'],
    'reclamation'=> ['addreclamation','savereclamation'],'promotion' => ['afficheprod','ajout', 'proajout','proproduit','proajouter','prosup','promod','procher','proaff', 'modifier','chercherpro'],
    'evenement' => ['evajout','evaff','evmodifier','modi','evsup']);
  
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    }
  } 
?>