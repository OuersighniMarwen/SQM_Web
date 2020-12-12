<?php

  class Client {
  private $username;
  private $password;
  private $lname;
  private $fname;
  private $phone;
  private $admin;
  private $adresse;
   
      public function __construct()
  {

  }

  public function getadresse()
  {
    return $this->adresse;
  }
  public function setadresse($adresse)
  {
    $this->adresse=$adresse;
  }
  public function getusername()
  {
    return $this->username;
  }
  public function setusername($username)
  {
    $this->username=$username;
  }
  public function getpassword()
  {
    return $this->password;
  }
  public function setpassword($password)
  {
    $this->password=$password;
  }
  public function getfname()
  {
    return $this->fname;
  }
  public function setfname($fname)
  {
    $this->fname=$fname;
  }
  public function getlname()
  {
    return $this->lname;
  }
  public function setlname($lname)
  {
    $this->lname=$lname;
  }
  public function getadmin()
  {
    return $this->admin;
  }
  public function setadmin($admin)
  {
    $this->admin=$admin;
  }

  
  public function getphone()
  {
    return $this->phone;
  }
  public function setphone($phone)
  {
    $this->phone=$phone;
  }

  
 public static function supprimer($username){

  $sql="DELETE FROM document WHERE username='".$username."' ";
  config::getInstance()->conn->query($sql);
  //echo $sql;
  
}

  public static  function show()
  {
 
  $sql="SELECT * FROM document ";
  $x = config::getInstance()->conn->query($sql);
  $s = $x->fetchAll();
  return $s;
}
 public static  function active($username)
  {
 
  $sql="UPDATE document SET admin = '0' WHERE username = '".$username."' ";
  config::getInstance()->conn->query($sql);
}
 public static  function desactive($username)
  {
 
  $sql="UPDATE document SET admin = '1' WHERE username = '".$username."' ";
  config::getInstance()->conn->query($sql);
  
}
 public static function chercherclient($username){

       $sql="SELECT * FROM document WHERE username like '%".$username."%' ";
      config::getInstance()->conn->query($sql);
      $s = $x->fetchAll();
      return $s;

}

  public static function research($n){
   
   $sql="SELECT *  from document where username like '".$n."%' or phone like '".$n."%' or adresse like '".$n."%' or lname like '".$n."%'or fname like '".$n."%'";
   $x=config::getInstance()->conn->query($sql);
    $s = $x->fetchAll();
      return $s;
  }



public static function calcul(){
 
            //echo $not;
 }
  public function connect()
  {
    $u= $this->username;
    $p= $this->password;
       $req="select * from document where username='".$u."' and password='".$p."'"; 
        $x =config::getInstance()->conn->query($req);
         $s = $x->fetchAll();
       echo $req;
    
  }

}
?>