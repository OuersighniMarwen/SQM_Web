<?php

class produit
{

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
        $this->reference = $reference;
    }

    public function getnom()
    {
        return $this->nom;
    }

    public function setnom($nom)
    {
        $this->nom = $nom;
    }

    public function getstock()
    {
        return $this->stock;
    }

    public function setstock($stock)
    {
        $this->stock = $stock;
    }

    public function getdesignation()
    {
        return $this->designation;
    }

    public function setdesignation($designation)
    {
        $this->designation = $designation;
    }

    public function getsolde()
    {
        return $this->solde;
    }

    public function setsolde($solde)
    {
        $this->solde = $solde;
    }

    public function getimage()
    {
        return $this->image;
    }

    public function setimage($image)
    {
        $this->image = $image;
    }

    public function getcategorie()
    {
        return $this->categorie;
    }

    public function setcategorie($categorie)
    {
        $this->categorie = $categorie;
    }


    public static function supprimer($reference)
    {
       $db = Db::getInstance();
       $req1= $db->query("DELETE FROM produit WHERE reference='" . $reference . "'  ");

    }

    public static function show()
    {
        $db = Db::getInstance();
       $req1= $db->query("SELECT * FROM produit ");
       return $req1->fetchAll();
      
    }

    public static function chercherproduit($reference)
    {
        $db = Db::getInstance();
       $req1= $db->query("SELECT * FROM produit WHERE reference='" . $reference . "'  ");
       return $req1->fetchAll();
    }
      public function Updateproduit()
    {
      $db= Db::getInstance();
       $req = $db->query("update document set  reference='".$this->reference."',nom='".$this->nom."',prix='".$this->prix."', stock='".$this->stock."' ,solde='".$this->solde."',designation='".$this->designation."',image='".$this->image."'");
    }

public static function comment()
    {        $list=[];
        if (isset($_REQUEST['submit'])) {
                $id=$_REQUEST['id'];
            $comm=$_REQUEST['commen'];
            $username=$_SESSION['user'];
            $db = Db::getInstance();
            $query = $db->query("insert into commentaire (username,com,id_prod) values ('$username','$comm','$id')");

        }
    }

 
}


?>
