
<?php

  class login {
  private $username;
  private $password;
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
      public function __construct()
  {

  }

  public function connect()
  {
    $u= $this->username;
    $p= $this->password;
       $req="select * from document where username='".$u."' and password='".$p."' "; 
        $x =config::getInstance()->conn->query($req);
         $s = $x->fetchAll();
       return $s;
    
  }
  }
  ?>