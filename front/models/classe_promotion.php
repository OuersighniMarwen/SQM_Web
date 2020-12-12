<?php 

class promotion {
  //attributs
  //private $comID;
  private $proID;
  private $protype;
  private $propourcentage;
  private $pronom;
  private $prodebut;
  private $profin;
 
  //methodes

  public function getproID(){
    return $this->proID;
  }

  public function setproID($proID){
    $this->proID=$proID;
  }

//
  public function getprotype(){
    return $this->protype;
  }

  public function setprotype($protype){
    $this->protype=$protype;
  }
//

  public function getpropourcentage(){
    return $this->propourcentage;
  }

  public function setpropourcentage($propourcentage){
    $this->propourcentage=$propourcentage;
  }


  public function getpronom(){
    return $this->pronom;
  }

  public function setpronom($pronom){
    $this->pronom=$pronom;
  }

//
  public function getprodebut(){
    return $this->prodebut;
  }

  public function setprodebut($prodebut){
    $this->prodebut=$prodebut;
  }
//
  public function getprofin(){
    return $this->profin;
  }

  public function setprofin($profin){
    $this->profin=$profin;
  }

 


function __construct($proID,$protype,$propourcentage,$pronom,$prodebut,$profin,$proimg){
  
  $this->proID=$proID;
  $this->protype=$protype;
  $this->propourcentage=$propourcentage;
  $this->pronom=$pronom;
  $this->prodebut=$prodebut;
  $this->profin=$profin;
  $this->proimg=$proimg;
}

public static  function insert(){
  if(isset($_GET['in1'])){
  $protype=$_GET['in1'];
  $propourcentage=$_GET['in2'];
  $pronom=$_GET['in3'];
  $prodebut=$_GET['in4'];
  $profin=$_GET['in5'];
  

  $sql="insert into promotion(protype,propourcentage,pronom,prodebut,profin) values ('$protype','$propourcentage','$pronom','$prodebut','$profin')";
  config::getInstance()->conn->query($sql);
  
 }

 }

 public static function sup($proID){

  $sql="DELETE FROM promotion WHERE proID= $proID ";
  config::getInstance()->conn->query($sql);
  
}

public static function chercherpro($pronom){

       $sql="SELECT * FROM promotion WHERE pronom like '%".$pronom."%'";
      $x = config::getInstance()->conn->query($sql);
      $s = $x->fetchAll();
      return $s;

}

public static function chercher($pronom){

       $sql="SELECT * FROM promotion WHERE proID='".$pronom."' ";
      $x = config::getInstance()->conn->query($sql);
      $s = $x->fetchAll();
      return $s;

}

static public function envoie_mail()
 {
    $msg=" chers client, des nouvelles Promotions de 40% 50% et jusqu'a 70%  ! visitez notre site enjoy ";

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'borgie.contact@gmail.com';                 // SMTP username
$mail->Password = 'B123456789';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 25;                                    // TCP port to connect to

$mail->setFrom('enjoy.contact@gmail.com', 'enjoy');
$mail->addAddress('chiheb.berrich@esprit.tn','Joe User');     // Add a recipient

$mail->isHTML(true);

$mail->Subject = 'enjoy';
$mail->Body    = $msg;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'un mail est envoyer vers tous les clients';
}
 }


public static function mod(){
  
  if(isset($_POST['in1'])){
  $proID=$_POST['in1'];
  $propourcentage=$_POST['in2'];
  $pronom=$_POST['in3'];
$prodebut=$_POST['in4'];
$profin=$_POST['in5'];

  $sql="UPDATE promotion SET propourcentage='$propourcentage',pronom='$pronom',prodebut='$prodebut',profin='$profin' WHERE proID=$proID";
  config::getInstance()->conn->query($sql);
  }
}



static  function affichage()
  {
     $db = Db::getInstance();
    $Rq="SELECT * FROM promotion ";
    $s=$db->query($Rq);
    return $s->fetchAll();
  }
  
public static function affecterPromo($id,$ref)
{
   $req = "UPDATE produit set IDpromotion='$id' where reference=$ref";
   config::getInstance()->conn->query($req);
}
public static function calculprix($pourcentage,$prix)
{
   $total = ($prix - (($prix*$pourcentage)/100));
   return $total;
}
public static function afficheProduit($proID){
     
     $db = Db::getInstance();
    $req="SELECT * FROM produit WHERE IDpromotion='" .$proID."' ";
     $produit = $db->query($req);
  
    return $produit->fetchAll();}

public static function cherchersd(){

  


     if(isset($_GET['in1'])){

      $pronom=$_GET['in1'] ;
      $sql="SELECT * FROM promotion WHERE pronom='$pronom' ";
      $x = config::getInstance()->conn->prepare($sql);
    $x->execute();
    $s = $x->fetchAll();
    echo"<table class='table table-striped table-bordered table-hover'>";
    echo"<h1>Liste Des Promotions</h1>";
    echo"<tr>";
    echo"<td align='center'>";echo "ID Produit";echo"</td>";
    echo"<td align='center'>";echo "Type";echo"</td>";
    echo"<td align='center'>";echo "Pourcentage";echo"</td>";
    echo"<td align='center'>";echo "Nom";echo"</td>";
    echo"<td align='center'>";echo "Date Debut";echo"</td>";
    echo"<td align='center'>";echo "Date Fin";echo"</td>";

    echo"</tr>";
    echo"</thead>";
    foreach ($s as $donne) {
      echo"<tr>";
    echo"<td align='center'>";echo $donne['proID'];echo"</td>";
    echo"<td align='center'>";echo $donne['protype'];echo"</td>";
    echo"<td align='center'>";echo $donne['propourcentage'];echo"</td>";
    echo"<td align='center'>";echo $donne['pronom'];echo"</td>";
    echo"<td align='center'>";echo $donne['prodebut'];echo"</td>";
    echo"<td align='center'>";echo $donne['profin'];echo"</td>";
  
      echo"</tr>";
  }
  echo"</table>";
    }



}
}


?>
