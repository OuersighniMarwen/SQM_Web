<?php

	class Categorie {
	
      private $id;
  private $sexe;
    private $type;

	public function __construct($id,$sexe,$type)
	{  $this->id=$id;
      $this->sexe=$sexe;
        $this->type=$type;

	
	}
	public function getType(){
    return $this->type;
  	}

      public function getSexe(){
    return $this->sexe;
    }

  	 public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM categorie');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $categorie) {
        $list[] = new Categorie($categorie['id'],$categorie['sexe'], $categorie['type']);
      }
 return $list;
    }





  }


?>