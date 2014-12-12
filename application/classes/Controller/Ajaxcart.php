<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajaxcart extends Controller {


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
		$quantite_demandee++;
		$tab = array('id'=>$this->request->param('id'), 'quantite'=>$quantite_demandee );
		echo json_encode($tab);
 	}


	public function action_soustraire()
	{
		session_start();

		$paniers = new Model_panier();
		$quantite = $paniers->getQuantite_Produit($this->request->param('id'));

		$key = array_search($this->request->param('id'), $_SESSION['panier']);
		if($key!==false) 
		{
			unset($_SESSION['panier'][$key]);
			if ( in_array($this->request->param('id'), $_SESSION['panier']) ) 
			{
				$quantite_demandee = array_count_values($_SESSION['panier'])[$this->request->param('id')];
				$tab = array('id'=>$this->request->param('id'), 'quantite'=>$quantite_demandee, 'reste_panier'=>count($_SESSION['panier']) );
				echo json_encode($tab);
			}
			else
			{
				$tab = array('id'=>$this->request->param('id'), 'quantite'=>0, 'reste_panier'=>count($_SESSION['panier']) );
				echo json_encode($tab);				
			}
		};
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


} // End 
