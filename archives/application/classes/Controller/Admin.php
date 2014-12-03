<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {



	public function action_ajout()
	{
		session_start();
		$ad_produits = new Model_admin();
		$view = View::Factory("ad_produit");

	    if (  array_key_exists("nom", $_POST)        && !empty($_POST["nom"]) 		    &&
	     	  array_key_exists("editeur", $_POST)    && !empty($_POST["editeur"])       &&
	     	  array_key_exists("categorie", $_POST)  && !empty($_POST["categorie"])     &&
	     	  array_key_exists("date_edit", $_POST)  && !empty($_POST["date_edit"])     
	       )
	    {
	        $nom  		= $_POST["nom"];
	        $editeur    = $_POST["editeur"];
	        $categorie  = $_POST["categorie"];
	        $date_edit  = $_POST["date_edit"];

	        var_dump($nom);

	    	// $user_id = $users->searchUser($email,$pass);
	
	    }


		// $ad_produit = $ad_produits->insertProduit($id);

		//$view->ad_produit=$ad_produit;
		$this->response->body($view);
 	}


} // End 
