<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Produit extends Controller {


	public function action_index()
	{
		$this->action_produits();
 	}


	public function action_produits()
	{
		$produits = new Model_produit();
		$view = View::Factory("produits");
		$produit = $produits->getLatestProduits(0,0);

		$view->produit=$produit;
		$this->response->body($view);
 	}


} // End 
