<?php
require_once"modals/classe_promotion.php";
require_once"modals/classe_evenement.php";
require_once"bd.php";

if($_POST['action'] == "proajout"){
	promotion::insert();
	header("location:promail.php");
}

if($_POST['action'] == "evajout"){
	evenement::insertev();
	header("location:promail.php");
}

if($_POST['action'] == "prosup"){
	promotion::sup();
	header("location:index.php");
}

if($_POST['action'] == "evsup"){
	evenement::supev();
	header("location:index.php");
}

if($_POST['action'] == "mod"){
	promotion::mod();
	header("location:index.php");
}

if($_POST['action'] == "chercher"){
	promotion::chercher();
}


?>