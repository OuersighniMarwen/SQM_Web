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

  public static function supprimer($username){

  $sql="DELETE FROM blog WHERE username='".$username."' ";
  config::getInstance()->conn->query($sql);
  //echo $sql;
  
   }

 public static function chercherblog($username){

       $sql="SELECT * FROM blog WHERE username='".$username."' ";
      $x = config::getInstance()->conn->query($sql);
      $s = $x->fetchAll();
      return $s;

}
  public static  function show()
  {
 
  $sql="SELECT * FROM blog";
  $x = config::getInstance()->conn->query($sql);
  $s = $x->fetchAll();
  return $s;
}
public static function insert()
    {
if(isset($_POST['in1']))
   {
  $username=$_POST['in1'];
  $fname=$_POST['in2'];
  $comment=$_POST['in3']; 
  $sql="insert into blog (username,fname,comment) values ('$username','$fname','$comment')";
  config::getInstance()->conn->query($sql); 
    }
}
  public static function research($n){
   
   $sql="SELECT *  from blog where username like '".$n."%' or fname like '".$n."%' or comment like '".$n."%'";
   $x=config::getInstance()->conn->query($sql);
    $s = $x->fetchAll();
      return $s;
  }


    public static function Update()
    {
   if(isset($_POST['in1'])){
  $username=$_POST['in1'];
  $fname=$_POST['in2'];
  $comment=$_POST['in3'];
  $sql="UPDATE blog SET fname='$fname' , comment='$comment' WHERE username='$username'";
  config::getInstance()->conn->query($sql);
    }
   }
}

?>