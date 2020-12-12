<?php
class livreur{
	private $nom	;
	private $region;
	public function getnom(){
		return $this->nom;
	}
	public function getregion(){
		return $this->region;
	}
	public function setnom($nom){
		return $this->nom= $nom;
	}
	public function setregion($region){
		return $this->region= $region;
	}
		 public static function afficherr($region)
	{
		$sql="select * from livreur where region='".$region."'";
		      $x = config::getInstance()->conn->query($sql);

		return $x->fetchAll();
	}
}
	?>