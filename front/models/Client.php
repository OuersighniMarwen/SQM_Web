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
      public  function ajouterClient()//create
      {
   $db = Db::getInstance();  
      $req = $db->query("insert into document (username,password,fname,lname,admin,phone,adresse) Values ('".$this->username."','".$this->password."','".$this->fname."','".$this->lname."','0','".$this->phone."','".$this->adresse."')");
                 
      }
  public function UpdateClient()
    {
      $db= Db::getInstance();
       $req = $db->query("update document set  password='".$this->password."',fname='".$this->fname."',lname='".$this->lname."',admin='0',phone='".$this->phone."',adresse='".$this->adresse."' where username='".$this->username."'");
    }


  public function connect()
  {
  	$u= $this->username;
    $p= $this->password;
  	$db = Db::getInstance();
       $req=$db->query("select * from document where username='".$u."' and password='".$p."' and admin=0"); 
       return $req->fetchAll();
  }
 
  
  static function Findclient($username)
  {
    $db = Db::getInstance();
    $Rq="SELECT * FROM document WHERE username='".$username."' ";
   
    $P=$db->query($Rq);
    $nb=0;
    while ($donne=$P->fetch())
    	 {
    	 	if($donne['username']==$username)
    	 	{
    	 		$nb++;
    	 	}
    }
    if($nb!=0)
    {
    	return true;
    }
    return false;
  //  return $P->fetch();



  }

  static  function show($username)
  {
  	 $db = Db::getInstance();
$find=client::Findclient($username);
if($find==true)
   {
    $Rq="SELECT * FROM document  WHERE username='".$username."' ";
    $P=$db->query($Rq);
    return $P->fetchAll();
  }
}


 static function motdepasse($username)
  {
    $db = Db::getInstance();  
    $Rq="select password from document where username='".$username."'";
   $P=$db->query($Rq);
    return $P->fetchAll();
  }

}
?>