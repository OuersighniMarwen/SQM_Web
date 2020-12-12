<?php 
 class blog {

    private $username;
	private $comment;
	private $fname;
	
   
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
	public function getfname()
	{
		return $this->fname;
	}
	public function setfname($fname)
	{
		$this->fname=$fname;
	}

	public function getcomment()
	{
		return $this->comment;
	}
	public function setcomment($comment)
	{
		$this->comment=$comment;
	}
      public  function ajouterblog()//create
      {

   $db = Db::getInstance();  
      $req = $db->query("insert into blog (username,fname,comment) Values ('".$this->username."','".$this->fname."','".$this->comment."')");
  
      }
  public function Updateblog()
    {
    
      $db= Db::getInstance();
       $req = $db->query("update blog set  comment='".$this->comment."',fname='".$this->fname."' where username='".$this->username."'");
    }

  /*static  function show()
  {
    $db = Db::getInstance();
    $Rq="SELECT * FROM blog ";
    $P=$db->query($Rq);
    return $P->fetchAll();
    echo $Rq;
  }*/
  static function supprimer($username)
  {
    $db = Db::getInstance();
    $Rq="DELETE FROM blog where username='".$username."' ";
    $db->query($Rq);
    
  }
  static function Findblog($username)
  {
    $db = Db::getInstance();
    $Rq="SELECT * FROM blog WHERE username='".$username."' ";
   
    $P=$db->query($Rq);
    $nb=0;
    while ($donne=$P->fetch())
    	 {
    	 	if($donne['username']==$username)
    	 	{
    	 		$nb++;
    	 	}
    }
    if($nb!=0)
    {
    	return true;
    }
    return false;
  //  return $P->fetch();



  }

  static  function show($username)
  {
  	 $db = Db::getInstance();
$find=blog::Findblog($username);
if($find==true)
   {
    $Rq="SELECT * FROM blog  WHERE username='".$username."' ";
    $P=$db->query($Rq);
    return $P->fetchAll();
  }
}


 }

?>