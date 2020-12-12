<?php

  class reclamation {
  	private $id_reclamation;
  	private $username;
    private $type;
    private $texte;

   
      public function __construct()
  {

  }

	public function gettype()
	{
		return $this->type;
	}
	public function settype($type)
	{
		$this->type=$type;
	}
	
	public function gettexte()
	{
		return $this->texte;
	}
	public function settexte($texte)
	{
		$this->texte=$texte;
	}
	public function getid_reclamation()
	{
		return $this->id_reclamation;
	}
	public function setid_reclamation($id_reclamation)
	{
		$this->id_reclamation=$id_reclamation;
	}
	
	public function getusername()
	{
		return $this->username;
	}
	public function setusername($username)
	{
		$this->username=$username;
	}
    

      public  function ajouterreclamation()//create
      {
      	      

      $db = Db::getInstance();  
      $req = $db->query("insert into reclamation (username,type,texte) Values ('".$_SESSION['username']."','".$this->type."','".$this->texte."')");
                 
      }


      
  static function  findreclamation($username)
      {
      	$db = Db::getInstance();  
    $Rq="SELECT * FROM reclamation where username= '".$username."'";
    $P=$db->query($Rq);
$nb=0;
while($donnees=$P->fetch()){
if($donnees['username']==$username)
{
$nb++;
}
if($nb!=0)
{return true;}
else return false;
}


      }


  static  function show($username)
  {
    $db = Db::getInstance();
    $f=reclamation::findreclamation($username);
    if($f==true){
    $Rq="SELECT * FROM reclamation where username= '".$username."'";
    $P=$db->query($Rq);

    return $P->fetchAll();
}
  }


}
?>