<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Panier extends Controller {


	public function action_ajouter()
	{
		session_start();

		$paniers = new Model_panier();
		$quantite = $paniers->getQuantite_Produit($this->request->param('id'));

		if( !isset($_SESSION['panier']) ||  empty($_SESSION['panier']) )
		{
			$_SESSION['panier'] = array($this->request->param('id'));
		}
		else
		{
			$quantite_demandee = 0;
			if ( in_array($this->request->param('id'), $_SESSION['panier']) ) 
			{
				$quantite_demandee = array_count_values($_SESSION['panier'])[$this->request->param('id')];
			}
			if ($quantite_demandee < $quantite['quantite'])
			{
				array_push($_SESSION['panier'], $this->request->param('id'));
			}
		};
		 $this->redirect("panier/view_panier");
 	}

	public function action_view_panier()
	{
		session_start();
		$paniers = new Model_panier();
		$view = View::Factory("panier");

		if( isset($_SESSION['panier']) &&  !empty($_SESSION['panier']) )
		{		
			$panier = $paniers->getPanier($_SESSION['panier']);
		}
		else
		{
			$this->redirect("produit/produits");
		}

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

		$transaction = true;
/*
		// Payement
		$paypal = new Helper_Paypal();

		for ($i=0; $i<count($panier); $i++) 
		{
			$quantite = array_count_values($_SESSION['panier'])[$panier[$i]['id']];
			$paypal->addItem($panier[$i]['nom'], '', $quantite, $panier[$i]['prix'] * $quantite, 0);
		} 

		$paypal->setCard("visa", "4417119669820331", "11", "2019", "012", "Joe", "Shopper");

		$paypal->setTotal(0, 0, $_SESSION['commande_prix'], $_SESSION['commande_prix']);

		$payment = $paypal->send();

		if ($payment['status'] == 'success' )
		{
			$transaction = true;
		}
		else
		{
			$transaction = false;
		};

*/

		// Envoi email 
		if ($transaction == true)
		{
			$mail = $paniers->sendMail(
								$user['email'],

								"Achat effectué sur l'Agora de mes livres à partager" ,

								"Bonjour " . '<strong>' . ucfirst($user['prenom']) . ' ' . ucfirst($user['nom']) . '</strong><br>'
								 . 'Vous avez effectué un achat dont le numéro de commande est: ' . $_SESSION['id_commande'] . '.' .'<br>' 
								 . 'Au revoir et à bientôt.' ,

								 true   // pour texte avec balises html sinon false
								);	
			$this->redirect("panier/view_achat");
		}
		else
		{
			$mail = $paniers->sendMail(
								$user['email'],

								"Achat sur l'Agora de mes livres à partager" ,

								"Bonjour " . '<strong>' . ucfirst($user['prenom']) . ' ' . ucfirst($user['nom']) . '</strong><br>'
								 . 'La transaction a échoué' .'<br>' 
								 . 'Au revoir et à bientôt.' ,

								 true   // pour texte avec balises html sinon false
								);	
		};


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
