<?php

  class Panier {
  private $username;
  private $prixTOT;
  private $date ;
  private $etat;
  private $IDlivraison ;
 
 public function __construct()
  {

  }

  public function getusername()
  {
    return $this->username;
  }
  public function setusername($username)
  {
    $this->username=$username;
  }
  public function getprixTOT()
  {
    return $this->prixTOT;
  }
  public function setprixTOT($prixTOT)
  {
    $this->prixTOT=$prixTOT;
  }
  public function getdate()
  {
    return $this->date;
  }
  public function setdate($date)
  {
    $this->date=$date;
  }
  public function getetat()
  {
    return $this->etat;
  }
  public function setetat($etat)
  {
    $this->etat=$etat;
  }



   public function getproduit($ref)
  {
      
    $db = Db::getInstance();
       $req=$db->query("select * from produit where reference='".$ref."' "); 
       return $req->fetchAll();
  }

  public function ValiderCommande()
  {
    $db = Db::getInstance();  
    $req = $db->query("insert into commande (username,prixTotal,date,etat,idLivraison) Values ('".$this->username."','".$this->prixTOT."','".$this->date."','".$this->etat."','0')");
    $req1= $db->query("select id from commande where date='".$this->date."' and username='".$this->username."' ");
    return $req1->fetchAll();
  } 

  public static function Validerligne($id,$ref,$quantite,$size,$prixtot)
  {
    $db = Db::getInstance();  
    $req = $db->query("insert into ligne (idCom ,refProd,quantite,size,prixTotal) Values ('".$id."','".$ref."','".$quantite."','".$size."','".$prixtot."')");
  }

  public static function getclient($username)
  {   
      $db = Db::getInstance();
       $req1= $db->query("select * from document where username='".$username."' ");
       return $req1->fetchAll();
  }

  public static function confirmer($id)
  {
    $db = Db::getInstance();  
    $req = $db->query(" update  commande  set etat='1'  where id='".$id."' ");
    
  } 

  public static function setLIV ($idLIV , $idCOM)
  {
    $db = Db::getInstance();  
    $req = $db->query(" update  commande  set idLivraison='".$idLIV."'  where id='".$idCOM."' ");
  }
}
?>