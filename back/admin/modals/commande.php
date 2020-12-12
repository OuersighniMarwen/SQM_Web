<?php 
 class commande {

  private $id;
	private $username;
	private $prixTotal;
  private $date;
  private $etat;
	
   
      public function __construct()
  {

  }
  public function getetat()
  {
    return $this->etat;
  }
  public function setetat($etat)
  {
    $this->etat=$etat;
  }
	public function getid()
	{
		return $this->id;
	}
	public function setid($id)
	{
		$this->id=$id;
	}
  public function getdate()
  {
    return $this->date;
  }
  public function setdate($date)
  {
    $this->date=$date;
  }
	public function getprixTotal()
	{
		return $this->prixTotal;
	}
	public function setprixTotal($prixTotal)
	{
		$this->prixTotal=$prixTotal;
	}

	public function getusername()
	{
		return $this->username;
	}
	public function setusername($username)
	{
		$this->username=$username;
	}

 public static function supprimer($id){

  $sql="DELETE FROM ligne WHERE idCom='".$id."' ";
  config::getInstance()->conn->query($sql);
  $sql="DELETE FROM commande WHERE id='".$id."' ";
  config::getInstance()->conn->query($sql);
  //echo $sql;
  
   }

 public static function cherchercommande($id){

       $sql="SELECT * FROM commande WHERE id='".$id."' ";
      $x = config::getInstance()->conn->query($sql);
      $s = $x->fetchAll();
      return $s;

}
  public static  function show()
  {
 
  $sql="SELECT * FROM commande";
  $x = config::getInstance()->conn->query($sql);
  $s = $x->fetchAll();
  return $s;
}

    public static function Update()
    {
   if(isset($_POST['in1'])){
  $id=$_POST['in1'];
  $prixTotal=$_POST['in2'];
  $username=$_POST['in3'];
   $date=$_POST['in4'];
   $etat=$_POST['in5']; 
  $sql="UPDATE commande SET username='$username' , prixTotal='$prixTotal', date='$date',etat='$etat' WHERE id='$id'";
  config::getInstance()->conn->query($sql);
    }
   }
   public static  function show1($id)
  {
 
  $sql="SELECT * FROM ligne WHERE idCom='".$id."' ";
  $x = config::getInstance()->conn->query($sql);
  $s = $x->fetchAll();
  return $s;
}
}

?>