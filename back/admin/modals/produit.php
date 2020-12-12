<?php 
 class produit {
  
  private $reference;
	private $nom;
	private $prix;
  private $stock;
  private $designation;
  private $solde;
  private $image;
  private $categorie;

	
   
      public function __construct()
  {

  }
	public function getreference()
	{
		return $this->reference;
	}
	public function setreference($reference)
	{
		$this->reference=$reference;
	}
	public function getnom()
	{
		return $this->nom;
	}
	public function setnom($nom)
	{
		$this->nom=$nom;
	}

	public function getstock()
	{
		return $this->stock;
	}
	public function setstock($stock)
	{
		$this->stock=$stock;
	}

  public function getdesignation()
  {
    return $this->designation;
  }
  public function setdesignation($designation)
  {
    $this->designation=$designation;
  }

  public function getsolde()
  {
    return $this->solde;
  }
  public function setsolde($solde)
  {
    $this->solde=$solde;
  }

  public function getimage()
  {
    return $this->image;
  }
  public function setimage($image)
  {
    $this->image=$image;
  }
    public function getcategorie()
  {
    return $this->categorie;
  }
  public function setcategorie($categorie)
  {
    $this->categorie=$categorie;
  }
 public static function supprimer($reference){

  $sql="DELETE FROM produit WHERE reference='".$reference."' ";
  config::getInstance()->conn->query($sql);
  //echo $sql;
  
   }

 public static function chercherproduit($reference){

       $sql="SELECT * FROM produit WHERE reference='".$reference."' ";
      $x = config::getInstance()->conn->query($sql);
      $s = $x->fetchAll();
      return $s;

}
  public static  function show()
  {
 
  $sql="SELECT * FROM produit";
  $x = config::getInstance()->conn->query($sql);
  $s = $x->fetchAll();
  return $s;
}
public static function insert()
    {
if(isset($_POST['in1']))
   {
  $reference=$_POST['in1'];
  $nom=$_POST['in2'];
  $prix=$_POST['in3'];
$stock=$_POST['in4'];
$designation=$_POST['in5'];
$solde=$_POST['in6'];
$image=$_POST['fileToUpdate'];
$categorie=$_POST['in8'];
   
  $sql="insert into produit (reference,nom,prix,stock,designation,solde,image,categorie) values ('$reference','$nom','$prix','$stock','$designation','$solde','$image','$categorie')";
  config::getInstance()->conn->query($sql); 
    }
}

    public static function Update()
    {
   if(isset($_POST['in1'])){
   $reference=$_POST['in1'];
  $nom=$_POST['in2'];
  $prix=$_POST['in3'];
  $stock=$_POST['in4'];
  $designation=$_POST['in5'];
  $solde=$_POST['in6'];
 $image=$_POST['fileToUpdate'];
 $categorie=$_POST['in8'];
   
  $sql="UPDATE produit SET nom='$nom' , prix='$prix' ,stock='$stock',designation='$designation', solde='$solde' ,image='$image',categorie='$categorie' WHERE reference='$reference'";
  config::getInstance()->conn->query($sql);
    }
   }
}

?>