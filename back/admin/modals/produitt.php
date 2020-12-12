<?php
class produit
{
  private
  $reference,
  $nom,
  $prix,
  $stock,
  $designation,
  $solde,
  $image,
  $categorie;
    public
  function setReference($reference){
    $this->reference = $reference;
  }
   function setNom($nom){
    $this->nom = $nom;
  }
function setPrix($prix){
    $this->prix = $prix;
  }
  function setStock($stock){
    $this->stock = $stock;
  }
  function setDesignation($designation){
    $this->designation= $designation;
  }
function setSolde($solde){
    $this->solde = $solde;
  }
function setImage($image){
    $this->image = $image;
  }
function setCategorie($categorie){
    $this->categorie = $categorie;
  }

function getReference(){
    return $this->reference;
  }
  function getNom(){
    return $this->nom;
  }
  function getPrix(){
    return $this->prix;
  }
function getStock(){
    return $this->stock;
  }
function getDesignation(){
    return $this->designation;
  }

function getSolde(){
    return $this->solde;
  }
function getImage(){
    return $this->image;
  }
function getCategorie(){

    return $this->categorie;
  }
function __construct ($reference,$nom,$prix,$stock,$designation,$solde,$image,$categorie)
  { 
         $this->reference=$reference;
          $this->nom=$nom;
         $this->prix=$prix;
          $this->stock=$stock;
         $this->designation=$designation;  
          $this->solde=$solde;
          $this->image=$image;
           $this->categorie=$categorie;
  }

function afficher_reference()
{
  echo $this->reference;
}
function afficher_nom()
{
  echo $this->nom;
}
 function afficher_prix() 
 {
  echo $this->prix;
 }
function afficher_stock() 
{
  echo $this->stock;}

function afficher_designation() { 
  
  echo $this->designation;

}

function affichersolde() 
 {
  echo $this->solde;
 }
 function afficherImage() 
 {
  echo $this->image;
 }
 function afficherCategorie() 
 {
  echo $this->categorie;
 }


    public static function all() {
      $list = [];
      $sql='SELECT * FROM produit';
      $req = config::getInstance()->conn->query($sql);
      return $req->fetchAll();
    }


public static  function rechercherOp($id,$conn){
        $req="SELECT * FROM categorie where type='".$type."'";
        $liste=$conn->query($req);
    return $liste->fetchAll();
    }

public static function afficherOp($conn){
    $req="SELECT * FROM categorie";
    $liste=$conn->query($req);
    return $liste->fetchAll();  
  }

    public static function all_200() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM produit WHERE prix=200');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $produit) {
        $list[] = new Produit($produit['reference'],$produit['nom'], $produit['prix'], $produit['stock'],$produit['designation'], $produit['solde'], $produit['image'],$produit['categorie']);
      }

      return $list;
    }
    public static function rechercher($queryString) {

    
              
$db = Db::getInstance();
$resultats="";
$query=preg_replace("#[^a-zA-Z ?0-9]#i", "", $queryString);   
$sql="SELECT * FROM produit WHERE reference like ? OR nom like ? ";
$req=$db->prepare($sql);
$req->execute(array('%'.$queryString.'%', '%'.$queryString.'%'));
$count=$req->rowCount();
if($count>=1){
 $produit = $req->fetch();
       return new Produit($produit['reference'],$produit['nom'], $produit['prix'], $produit['stock'],$produit['designation'], $produit['solde'], $produit['image'],$produit['categorie']);

}
else
echo"waw";


    }
public static function ajouter_produit($prod1) {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query("INSERT INTO produit(reference,nom,prix,stock,designation,solde,image,categorie)  
      values('".$prod1->getReference()."',
          '".$prod1->getNom()."',
          ".$prod1->getPrix().",
          ".$prod1->getStock().",
          '".$prod1->getDesignation()."',
          ".$prod1->getSolde().",
          '".$prod1->getImage()."',
          '".$prod1->getCategorie()."')");

    }

     public static function modifierProduit($prod1){
      $db = Db::getInstance();
      //echo $prod1->getPrix();
    $req=$db->query ("UPDATE produit SET nom='".$prod1->getNom()."',
    prix=".$prod1->getPrix().",
    stock=".$prod1->getStock().",
    designation='".$prod1->getDesignation()."',
    solde=".$prod1->getSolde().",
    image='".$prod1->getImage()."',
    categorie='".$prod1->getCategorie()."'
    where reference='".$prod1->getReference()."'"
    );

    //echo $req;
//   $req->execute(array('reference' => $prod1->getReference()));
  }
  public static function afficheProduit_ref($ref){
         $db = Db::getInstance();
    $req=$db->query("SELECT * FROM produit WHERE reference=".$ref." ");
  
    return $produit->fetchAll();}

    
 public static function supprimerProduit($reference){
    $db = Db::getInstance();
    //$req=$db->query("DELETE FROM produit WHERE reference=".$ref." ");
  
  $req = $db->prepare('DELETE FROM produit WHERE reference = :reference');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('reference' => $reference));
      
    
  }

    public static function find($reference) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      
      $req = $db->prepare('SELECT * FROM produit WHERE reference = :reference');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('reference' => $reference));
      $produit = $req->fetch();

      return new Produit($produit['reference'],$produit['nom'], $produit['prix'], $produit['stock'],$produit['designation'], $produit['solde'], $produit['image'],$produit['categorie']);
    }
  }
?>