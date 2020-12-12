<?php
  require_once("modals/login.php");
class login_controller
{


  public function connect()
  {
      $login= new login();
          $login->setusername($_POST['username']);
          $login->setpassword($_POST['password']);
          $res=$login->connect();
       
          if (empty($res))
          {
              require_once('view/page/login.php');
          }
          else {
           $_SESSION['username']=$_POST['username'];
           $_SESSION['password']=$_POST['password'];
            header('Location: index.php');
          }
  }

    public function login()
  {
     
            require_once('view/page/login.php');
          
  }
  public function logout()
        {

         session_unset();
         session_destroy();
         //header('Location: index.php');
          }
}
?>