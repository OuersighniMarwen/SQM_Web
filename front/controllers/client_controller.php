<?php

 Class client_controller{


   public function saveClient()//fct ajout
  {
    $client =new Client();
    $client->setusername($_POST['username']);
    $client->setpassword($_POST['password']);
    $client->setfname($_POST['fname']);
    $client->setlname($_POST['lname']);
    $client->setphone($_POST['phone']);
    $client->setadresse($_POST['adresse']);
  
      $client->ajouterClient();
    require_once("views/Client/signup-login.php");
    
  }
  public function addClient()
  {
    require_once("views/Client/signup-login.php");
  }
   public function EditClient() 
        {
        
            require_once('views/Client/account-profile.php');
        }
   public function UpdateClient() 
      {
        
    $client =new Client();
    $client->setusername($_POST['username']);
    $client->setpassword($_POST['password']);
    $client->setfname($_POST['fname']);
    $client->setlname($_POST['lname']);
    $client->setphone($_POST['phone']);
    $client->setadresse($_POST['adresse']);
           // var_dump($client);

    $client->UpdateClient();
           // var_dump($client);
            echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               client modifié  avec 
                <strong class='green'>succès</strong>
                </div>";
            $this->EditClient();
        }
      public function Index() 
        {
            $clients= Client::show();
            require_once('views/client/blog-single-fullwidth.php');
        }
        public function connect()
        {
          $client= new client();
          $client->setusername($_POST['username']);
          $client->setpassword($_POST['password']);
          $res=$client->connect();

          if (empty($res))
          {
              require_once('views/client/signup-login.php');
          }
          else {
           $_SESSION['username']=$_POST['username'];
           $_SESSION['password']=$_POST['password'];
            if(!isset($_SESSION["cart_item"]))
            {
            $_SESSION["cart_item"][]= array('reference','nom', 'prix' ,'size','quantite');
            }
            $item_total = 0;
            require_once('views/client/account-profile.php');
          }
        }
        public function logout()
        {
        
         session_unset();
         session_destroy();
         require_once('views/client/signup-login.php');
          }
            public function oublier()
        {
          
          require_once("views/Client/lost-password.php");
          }


  public function mdp()
         {
          $clients=client::motdepasse($_POST['username']);
          require_once("views/Client/mdp.php");
         }
 


}
?>
  