<?php

class rates
{

    private $id_rate;
    private $valeur;
    private $id;
    private $reference;



    public function __construct()
    {

    }
   
    public function getid_rate()
    {
        return $this->id_rate;
    }

    public function setid_rate($id_rate)
    {
        $this->id_rate = $id_rate;
    }


      public function getvaleur()
    {
        return $this->valeur;
    }

    public function setvaleur($valeur)
    {
        $this->valeur = $valeur;
    }


      public function getid()
    {
        return $this->id;
    }

    public function setid($id)
    {
        $this->id= $id;
    }


    public function getreference()
    {
        return $this->reference;
    }

    public function setreference($reference)
    {
        $this->reference = $reference;
    }

    public static function insert()
    {
if(isset($_POST['in1']))
   {
  $id_rate=$_POST['in1'];
  $valeur=$_POST['in2'];
  $id=$_POST['in3'];
$reference=$_POST['in4'];
   
  $sql="insert into produit (id_rate,valeur,id,reference) values ('$id_rate','$valeur','$id','$reference')";
  config::getInstance()->conn->query($sql); 
    }
}