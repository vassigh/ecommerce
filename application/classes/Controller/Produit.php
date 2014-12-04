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
		$produit = $produit_model->getLatestProduits(0,0);


  		$limit= 3;              // limit de produits par page
    	$nbpages= intval(count($produit)/$limit);
    	if(count($produit)%$limit > 0) $nbpages++;
		$_SESSION['nbpages'] = $nbpages;

		// calcul de OFFSET (pour pagination)
		$p = 0;
		if ( $this->request->param('id') >= 1 )
		{
        	$p = $limit * ($this->request->param('id')-1);  
        }
        $produit = $produit_model->getLatestProduits($limit, $p);

		$view->produit=$produit;
		$this->response->body($view);
 	}


}  
