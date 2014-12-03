<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {



	// ==================================  AJOUT ============================================= //

	public function action_ajout()
	{
		session_start();
		$ad_produits = new Model_admin();
		$view = View::Factory("ad_produit");



	    if (  array_key_exists("nom", $_POST)        	 && !empty($_POST["nom"]) 		    &&
	    	  array_key_exists("auteur", $_POST)  		 && !empty($_POST["auteur"])        &&
	     	  array_key_exists("editeur", $_POST)    	 && !empty($_POST["editeur"])       &&
	     	  array_key_exists("categorie", $_POST)  	 && !empty($_POST["categorie"])     &&
	     	  array_key_exists("date_edition", $_POST)   && !empty($_POST["date_edition"])  &&
	     	  array_key_exists("prix", $_POST)  	 	 && !empty($_POST["prix"])     
	       )
	    {
	        $nom  			= $_POST["nom"];
	        $auteur     	= $_POST["auteur"];
	        $editeur    	= $_POST["editeur"];
	        $categorie  	= $_POST["categorie"];
	        $date_edition   = $_POST["date_edition"];
	        $prix	     	= $_POST["prix"];

	    	$ad_produit = $ad_produits->insertProduit($nom, $auteur, $editeur, $categorie, $date_edition, $prix, $_FILES['file']['name']);
	
	    }
	    
		$view->ad_produit=$ad_produits;
		$this->response->body($view);
 	}


	// ==================================  DELETE ============================================= //

	public function action_supprimer()
	{
		session_start();
		$ad_suppressions = new Model_admin();

		$ad_suppression = $ad_suppressions->deletetProduit($this->request->param('id'));

		$this->redirect('/');

 	}


} // End 
