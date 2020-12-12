<?php


  class livraison {
  	private $id_livraison;
  	private $username;
    private $numero;
	private $date;
	private $adresse;
	private $etat;
	private $region;

   
      public function __construct()
  {  }

	public function getnumero()
	{
		return $this->numero;
	}
	public function setnumero($numero)
	{
		$this->numero=$numero;
	}
	public function getdate()
	{
		return $this->date;
	}
	public function setdate($date)
	{
		$this->date=$date;
	}
	public function getadresse()
	{
		return $this->adresse;
	}
	public function setadresse($adresse)
	{
		$this->adresse=$adresse;
	}
	public function getid_livraison()
	{
		return $this->id_livraison;
	}
	public function setid_livraison($id_livraison)
	{
		$this->id_livraison=$id_livraison;
	}
	
	public function getusername()
	{
		return $this->username;
	}
	public function setusername($username)
	{
		$this->username=$username;
	}
    public function getetat()
	{
		return $this->etat;
	}
	public function setetat($etat)
	{
		$this->etat=$etat;
	}
	public function getregion()
	{
		return $this->region;
	}
	public function setregion($region)
	{
		$this->region=$region;
	}

      public  function ajouterlivraison()//create
      {
      //	var_dump($_SESSION['username']);
      $db = Db::getInstance();  
      $req = $db->query("insert into livraison (username,numero,date,adresse,region,etat) Values ('".$_SESSION['username']."',".$this->numero.",'".$this->date."','".$this->adresse."','".$this->region."','0')");
      $req1 = $db->query("select id_livraison from livraison ") ;
    	 return $req1->fetchAll();                 
      }
      
      static function  findlivraison($username)
      {
      	$db = Db::getInstance();  
    $Rq="SELECT * FROM livraison where username= '".$username."'";
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
      public static function chercheremail($username){

       $sql="SELECT email FROM document join livraison on username='".$username."' ";
      $x = Db::getInstance()->query($sql);
      $s = $x->fetchAll();
      return $s;
  		}


  static  function show($username)
  {
    $db = Db::getInstance();
    $f=livraison::findlivraison($username);
    if($f==true){
    $Rq="SELECT * FROM livraison where username= '".$username."'";
    $P=$db->query($Rq);

    return $P->fetchAll();
}
  }
  static  function show1($region)
  {
    $db = Db::getInstance();
    $Rq="SELECT * FROM livreur where region= '".$region."'";
    $P=$db->query($Rq);

    return $P->fetchAll();
}
  


}
?>