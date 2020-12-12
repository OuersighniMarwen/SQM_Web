<?php
require_once("models/raates.php");

Class Ratescontroller
{


    public function index()
    {
        $produits = rates::show();
        require_once('views/rates/index.php');
    }
