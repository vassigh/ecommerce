<?php

$users = new Model_User();

    // Inscription

    if (  array_key_exists("nom", $_POST)      && !empty($_POST["nom"])   &&
          array_key_exists("prenom", $_POST)   && !empty($_POST["prenom"]) && 
          array_key_exists("email", $_POST)    && !empty($_POST["email"]) && 
          array_key_exists("pass", $_POST)     && !empty($_POST["pass"]) )   
    {
        $nom     = $_POST["nom"];
        $prenom  = $_POST["prenom"];
        $email   = $_POST["email"];
        $pass    = $_POST["pass"];

     	$id = $users->insertUser($nom, $prenom, $email, $pass);

    	header("Location: index.php");
    	exit;
	}

     include 'register.phtml';