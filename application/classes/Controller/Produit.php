<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Produit extends Controller {


	public function action_index()
	{
		$this->action_produits();
 	}


	public function action_produits()
	{
		session_start();

		$produit_model = new Model_produit();
		$view = View::Factory("produits");

		if ( $this->request->param('id') == "retour" ) $_SESSION['panier'] = '';

		$search='';
		if (  array_key_exists("search", $_POST) && !empty($_POST["search"] ) )
		{
			$search=$_POST["search"];
		}

		$categorie='';
    	if (  array_key_exists("categorie", $_POST)  && !empty($_POST["categorie"]) )
    	{
      		$categorie=$_POST["categorie"];
      		$_SESSION['categorie'] = $categorie;
      		if ($categorie=='tous livres') $categorie = '';
      	}

		$produit = $produit_model->getLatestProduits(0,0,$categorie, $search );
  		$limit= 4;              // limit de produits par page
    	$nbpages= intval(count($produit)/$limit);
    	if(count($produit)%$limit > 0) $nbpages++;
		$_SESSION['nbpages'] = $nbpages;

		// calcul de OFFSET (pour pagination)
		$p = 0;
		if ( $this->request->param('id') >= 1 )
		{
        	$p = $limit * ($this->request->param('id')-1);  
        }
        $produit = $produit_model->getLatestProduits($limit, $p, $categorie, $search);

		$view->produit=$produit;
		$this->response->body($view);
 	}


}  
