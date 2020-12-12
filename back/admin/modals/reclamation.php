<?php 
 class reclamation {

  private $idreclamation;
	private $username;
	private $type;
  private $text;
	
   
      public function __construct()
  {

  }
	public function getid_reclamation()
	{
		return $this->idreclamation;
	}
	public function setid_reclamation($id_reclamation)
	{
		$this->id_reclamation=$id_reclamation;
	}
  public function gettext()
  {
    return $this->text;
  }
  public function settext($text)
  {
    $this->text=$text;
  }
	public function gettype()
	{
		return $this->type;
	}
	public function settype($type)
	{
		$this->type=$type;
	}

	public function getusername()
	{
		return $this->username;
	}
	public function setusername($username)
	{
		$this->username=$username;
	}

 public static function supprimer($id_reclamation){

  $sql="DELETE FROM reclamation WHERE id_reclamation='".$id_reclamation."' ";
  config::getInstance()->conn->query($sql);
  //echo $sql;
  
   }

 public static function chercherreclamation($id_reclamation){

       $sql="SELECT * FROM reclamation WHERE id_reclamation='".$id_reclamation."' ";
      $x = config::getInstance()->conn->query($sql);
      $s = $x->fetchAll();
      return $s;

}
  public static  function show()
  {
 
  $sql="SELECT * FROM reclamation";
  $x = config::getInstance()->conn->query($sql);
  $s = $x->fetchAll();
  return $s;
}

}

?>