<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller {




	public function action_login()
	{
		$users = new Model_user();
		$view = View::Factory("login");

		$err_email = true;

	    if (  array_key_exists("email", $_POST)    && !empty($_POST["email"]) &&
	     	  array_key_exists("pass", $_POST)     && !empty($_POST["pass"])  )
	    {
	        $email  = $_POST["email"];
	        $pass   = $_POST["pass"];
	    	$user_id = $users->searchUser($email,$pass);
	    	if ($user_id)
	    	{
	            session_start();
	            $_SESSION['user_id'] = $user_id;
	            $_SESSION['admin'] = 'n';
	            if ($email == 'cvassigh@wanadoo.fr') $_SESSION['admin'] = 'o';  // pour l'administration
	    		$this->redirect("produit/produits");
	    	}
	    	else
	    	{
	    		$err_email = false;
	    	}
	    }
		$view->user=$users;
		$this->response->body($view);
 	}


	public function action_logout()
	{
		// On vide la variable session puis on la détruit complètement
		session_start();
		$_SESSION = array();
		session_destroy();
		// Redirection vers la page d'accueil
		header("Location: login.php");


 	}


	public function action_register()
	{
		$users = new Model_user();
		$view = View::Factory("register");

 		if (  array_key_exists("nom", $_POST)      && !empty($_POST["nom"])   &&
	          array_key_exists("prenom", $_POST)   && !empty($_POST["prenom"]) && 
	          array_key_exists("email", $_POST)    && !empty($_POST["email"]) && 
	          array_key_exists("pass", $_POST)     && !empty($_POST["pass"]) )   
	    {
	        $nom     = $_POST["nom"];
	        $prenom  = $_POST["prenom"];
	        $email   = $_POST["email"];
	        $pass    = $_POST["pass"];

	     	$id = $users->insertUser($nom, $prenom, $email, $pass);

	    	// header("Location: index.php");
	    	exit;
		}

		$view->user=$users;
		$this->response->body($view);
 	}



	public function action_produits()
	{
		session_start();
		$users = new Model_user();
		$view = View::Factory("produits");

		$view->user=$users;
		$this->response->body($view);
 	}


} // End 
