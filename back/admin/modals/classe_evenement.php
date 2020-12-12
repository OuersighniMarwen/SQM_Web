<?php 

class evenement{
  //attributs
  //private $comID;
  private $evid;
  private $evdate_debut;
  private $evdate_fin;
  private $evnom;
  
  //methodes

  public function getevid(){
    return $this->evid;
  }

  public function setevid($evid){
    $this->evid=$evid;
  }

//
  public function getevdate_debut(){
    return $this->evdate_debut;
  }

  public function setevdate_debut($evdate_debut){
    $this->evdate_debut=$evdate_debut;
  }
//

  public function getevdate_fin(){
    return $this->getevdate_fin;
  }

  public function setpropourcentage($getevdate_fin){
    $this->getevdate_fin=$getevdate_fin;
  }


  public function getevnom(){
    return $this->evnom;
  }

  public function setpronom($evnom){
    $this->evnom=$evnom;
  }

  


function __construct($evid,$evdate_debut,$evdate_fin,$evnom){
  
  $this->evid=$evid;
  $this->evnom=$evnom;
  $this->evdate_debut=$evdate_debut;
  $this->evdate_fin=$evdate_fin;
  
}



public static  function insertev(){
  if(isset($_GET['in1'])){
 $evdate_debut=$_GET['in1'];

  $evdate_fin=$_GET['in2'];
  $evnom=$_GET['in3'];
 
  $sql="insert into evenement(evdate_debut,evdate_fin,evnom) values ('$evdate_debut','$evdate_fin','$evnom')";
  config::getInstance()->conn->query($sql);
  
                      }
 }

 


 public static function supev($evid){

  $sql="DELETE FROM evenement WHERE evid= $evid ";
  config::getInstance()->conn->query($sql);
  
}

public static function sup($evid){

  $sql="DELETE FROM evenement WHERE evid= $evid ";
  config::getInstance()->conn->query($sql);
  
}

public static function evmodi(){
  
  if(isset($_POST['in1'])){
  $evid=$_POST['in1'];
  $evdate_debut=$_POST['in2'];
  $evdate_fin=$_POST['in3'];
  $evnom=$_POST['in4'];


  $sql="UPDATE evenement SET evid='$evid',evdate_debut='$evdate_debut',evdate_fin='$evdate_fin',evnom='$evnom' WHERE evid=$evid";
  config::getInstance()->conn->query($sql);
  }
}

 public static function afficherev(){
  $sql="SELECT * FROM evenement  ";
  $x = config::getInstance()->conn->prepare($sql);
  $x->execute();
  //echo $sql;
  $s = $x->fetchAll();
  //var_dump($s);
  return $s;
  

}

public static function evchercher($evnom){

       $sql="SELECT * FROM evenement WHERE evid='".$evnom."' ";
      $x = config::getInstance()->conn->query($sql);
      $s = $x->fetchAll();
      return $s;

}




}
?>
