<?php
  require_once("modals/Client.php");
class client_controller
{
    public function afficher() 
        {
            $clients= Client::show();
             
            require_once('view/client/Indexclient.php');
        }
   

           public function supprimer() 
        {
          client::supprimer($_POST['username']);
            $clients= client::show();
             echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               client supprimer  avec 
                <strong class='green'>succès</strong>
                </div>";
            require_once('view/client/Indexclient.php');
        }
         public function active() 
        {
          client::active($_POST['username']);
            $clients= client::show();
             echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               client active  avec 
                <strong class='green'>succès</strong>
                </div>";
            require_once('view/client/Indexclient.php');
        }
         public function desactive() 
        {
          client::desactive($_POST['username']);
            $clients= client::show();
             echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               client desactive  avec 
                <strong class='green'>succès</strong>
                </div>";
            require_once('view/client/Indexclient.php');
        }
   
 public function chercher() {
     
            $clients= Client::chercherclient($_POST['username']);
            require_once('view/client/Indexclient.php');
    }
     public function recherche() {
     if ($_POST)
     {
$n=$_POST['recherche'];
$clients= Client::research($n);
} 
require_once('view/client/Indexclient.php');
}         
     
  public function connect()
  {
      $client= new client();
          $client->setusername($_POST['username']);
          $client->setpassword($_POST['password']);
          $res=$client->connect();
       
          if (empty($res))
          {
              require_once('login.php');
          }
          else {
           $_SESSION['username']=$_POST['username'];
           $_SESSION['password']=$_POST['password'];
            require_once('layout.php');
          }
  }
}
?>