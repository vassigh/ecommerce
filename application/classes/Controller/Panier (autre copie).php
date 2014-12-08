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

		$this->redirect("panier/view_panier");
 	}

	public function action_view_panier()
	{
		session_start();
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

	public function action_achat()
	{
		session_start();
		$paniers = new Model_panier();
		$view = View::Factory("achat");
		$panier = $paniers->getPanier($_SESSION['panier']);

		$id_commande = $paniers->insertCommande($_SESSION['user_id']);
		$_SESSION['id_commande'] = $id_commande;
		$commande_produit = $paniers->insert_update_Commande_produits($id_commande, $panier);

		$view->panier=$panier;
		$view->commande_produit=$id_commande;
		
		$this->response->body($view);
 	}


} // End 
