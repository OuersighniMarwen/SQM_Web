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
  {

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
  public function getregion()
  {
    return $this->username;
  }
  public function setregion($region)
  {
    $this->username=$username;
  }
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
  

  public function getetat()
  {
    return $this->etat;
  }
  public function setetat($etat)
  {
    $this->etat=$etat;
  }
  
	public static function calculer(){

  $sql="SELECT   count(*) as s from livraison where etat='non traitee'";
  $x=config::getInstance()->conn->query($sql);
  //echo $sql;
  $x_array = $x->fetchAll();
      return $x;

  
   }

 public static function supprimer($id_livraison){

  $sql="DELETE FROM livraison WHERE id_livraison='".$id_livraison."' ";
  config::getInstance()->conn->query($sql);
  //echo $sql;
  
   }

 public static function chercherlivraison($id_livraison){

       $sql="SELECT * FROM livraison WHERE id_livraison='".$id_livraison."' ";
      $x = config::getInstance()->conn->query($sql);
      $s = $x->fetchAll();
      return $s;

}


  public static  function show()
  {
 
  $sql="SELECT * FROM livraison";
  $x = config::getInstance()->conn->query($sql);
  $s = $x->fetchAll();
  return $s;
}


    public static function Update()
    {
   if(isset($_POST['in1'])){
  $id_livraison=$_POST['in1'];
  $numero=$_POST['in3'];
   $date=$_POST['in4']; 
    $adresse=$_POST['in5']; 
    $etat=$_POST['in6']; 
    $region=$_POST['in7'];
  $sql="UPDATE livraison SET numero='$numero' , date='$date' ,adresse='$adresse',etat='$etat',region='$region' WHERE id_livraison='$id_livraison'";
  config::getInstance()->conn->query($sql);
    }
   }
}

?>