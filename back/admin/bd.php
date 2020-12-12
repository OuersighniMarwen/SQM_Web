<?php

class config
{
	private static $instance = null;
	public $conn = null;
	private function __construct()
	{
	
	$host ="127.0.0.1";
	$username= "root";
	$password= "";
	$db= "enjoy_2a8";

	$cnx= new PDO('mysql:host='.$host.';dbname='.$db,$username,$password);	
	$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$cnx->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$this->conn=$cnx;
	}

	public static function getInstance()
	{
		if(!self::$instance){
			self::$instance = new config();
		}
		return self::$instance;
	}
}

?>

