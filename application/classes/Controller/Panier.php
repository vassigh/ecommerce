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

		// Création de commandes et commande_produits
		$id_commande = $paniers->insertCommande($_SESSION['user_id']);
		$_SESSION['id_commande'] = $id_commande;
		$commande_produit = $paniers->insertCommande_produits($id_commande, $panier);

		// Mise à jour quantite du produit dans la table produits
		$quantite = $paniers->updateProduit_Quantite($panier);

		$user = $paniers->getUser($_SESSION['user_id']['id']);
		$mail = $paniers->sendMail(
							$user['email'],

							"Achat effectué sur l'Agora de mes livres à partager" ,

							"Bonjour " . '<strong>' . ucfirst($user['prenom']) . ' ' . ucfirst($user['nom']) . '</strong><br>'
							 . 'Vous avez effectué un achat dont le numéro de commande est: ' . $_SESSION['id_commande'] . '.' .'<br>' 
							 . 'Au revoir et à bientôt.' ,

							 true   // pour texte avec balises html sinon true
							);	

		$this->redirect("panier/view_achat");

 	}

	public function action_view_achat()
	{
		session_start();
		$paniers = new Model_panier();
		$view = View::Factory("achat");
		$panier = $paniers->getPanier($_SESSION['panier']);

		$user = $paniers->getUser($_SESSION['user_id']['id']);
	
		$view->user=$user;
		$view->panier=$panier;
		$this->response->body($view);
 	}

} // End 
