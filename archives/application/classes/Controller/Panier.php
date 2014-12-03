<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Panier extends Controller {


	public function action_ajouter()
	{
		session_start();
		if( !isset($_SESSION['panier']) ||  empty($_SESSION['panier']) )
		{
			$_SESSION['panier'] = array($this->request->param('id'));
		}
		else
		{
			array_push($_SESSION['panier'], $this->request->param('id'));
		};

		$paniers = new Model_panier();
		$view = View::Factory("panier");
		$panier = $paniers->getPanier($_SESSION['panier']);

		$view->panier=$panier;
		$this->response->body($view);
 	}

	public function action_commande()
	{
		session_start();
		$paniers = new Model_panier();
		$view = View::Factory("panier_commande");
		$panier = $paniers->getPanier($_SESSION['panier']);

		$view->panier=$panier;
		$this->response->body($view);
 	}


} // End 
