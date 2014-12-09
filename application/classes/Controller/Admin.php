<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {



	// ==================================  AJOUT ============================================= //

	public function action_ajout()
	{
		session_start();
		$ad_ajout_model = new Model_admin();
		$view = View::Factory("ad_produit");
		$ad_produits=0;


	    if (  array_key_exists("nom", $_POST)        	 && !empty($_POST["nom"]) 		    &&
	    	  array_key_exists("auteur", $_POST)  		 && !empty($_POST["auteur"])        &&
	     	  array_key_exists("editeur", $_POST)    	 && !empty($_POST["editeur"])       &&
	     	  array_key_exists("categorie", $_POST)  	 && !empty($_POST["categorie"])     &&
	     	  array_key_exists("date_edition", $_POST)   && !empty($_POST["date_edition"])  &&
	     	  array_key_exists("prix", $_POST)  	 	 && !empty($_POST["prix"])			&& 
	     	  array_key_exists("quantite", $_POST) 		 && $_POST["quantite"] > 0       	&&	 								  	 
	     	  array_key_exists("ean13", $_POST)  	 	 && !empty($_POST["ean13"])       
	       )
	    {

	        $nom  			= $_POST["nom"];
	        $auteur     	= $_POST["auteur"];
	        $editeur    	= $_POST["editeur"];
	        $categorie  	= $_POST["categorie"];
	        $date_edition   = $_POST["date_edition"];
	        $prix	     	= $_POST["prix"];
	        $quantite	   	= $_POST["quantite"];
	        $ean13	     	= $_POST["ean13"];


	        if ( isset($_FILES['file']['name']) && $_FILES['file']['name'] != '' )
	        {
	        	$image = $_FILES['file']['name'];
	        }
	        else
	        {
	        	$image = '';	        	
	        };

	        if (array_key_exists("resume", $_POST) && !empty($_POST["resume"]) )
	        {
	        	$resume	= $_POST["resume"];
	        }
	        else
	        {
	        	$resume	= '';
	        }

	    	$ad_produits = $ad_ajout_model->insertProduit($nom, $auteur, $editeur, $categorie, $date_edition, $prix, $image, $quantite, $ean13, $resume);
	
	    }
	    
		$view->ad_produit=$ad_produits;
		$this->response->body($view);
 	}


	public function action_modifier()
	{
		session_start();
		$ad_model = new Model_admin();
		$view = View::Factory("ad_modification");
		$ad_modification="";


	    if (  array_key_exists("nom", $_POST)        	 && !empty($_POST["nom"]) 		    &&
	    	  array_key_exists("auteur", $_POST)  		 && !empty($_POST["auteur"])        &&
	     	  array_key_exists("editeur", $_POST)    	 && !empty($_POST["editeur"])       &&
	     	  array_key_exists("categorie", $_POST)  	 && !empty($_POST["categorie"])     &&
	     	  array_key_exists("date_edition", $_POST)   && !empty($_POST["date_edition"])  &&
	     	  array_key_exists("prix", $_POST)  	 	 && !empty($_POST["prix"])  		&&  
	     	  array_key_exists("quantite", $_POST)  	 								  	&& 
	     	  array_key_exists("ean13", $_POST)  	 	 && !empty($_POST["ean13"])  		 
	       )
	    {
	        $nom  			= $_POST["nom"];
	        $auteur     	= $_POST["auteur"];
	        $editeur    	= $_POST["editeur"];
	        $categorie  	= $_POST["categorie"];
	        $date_edition   = $_POST["date_edition"];
	        $prix	     	= $_POST["prix"];
	        $quantite	   	= $_POST["quantite"];
	        $ean13	     	= $_POST["ean13"];

	        if (array_key_exists("resume", $_POST) && !empty($_POST["resume"]) )
	        {
	        	$resume	= $_POST["resume"];
	        }
	        else
	        {
	        	$resume	= '';
	        }

	        if ( isset($_FILES['file']['name']) && $_FILES['file']['name'] != '' )
	        {
	      		$ad_modification = $ad_model->updateProduit_image($this->request->param('id'), $nom, $auteur, $editeur, $categorie, $date_edition, $prix, $_FILES['file']['name'], $quantite, $ean13, $resume);
	      	}
	      	else
	      	{
	      		$ad_modification = $ad_model->updateProduit($this->request->param('id'), $nom, $auteur, $editeur, $categorie, $date_edition, $prix, $quantite, $ean13, $resume);	      		
	      	}
	      	$ad_modification = $ad_model->getProduit($this->request->param('id'));
	    }
	    else
	    {
	      	$ad_modification = $ad_model->getProduit($this->request->param('id'));
	    }
	    
		$view->ad_modification=$ad_modification;
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
