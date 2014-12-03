<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller {




	public function action_login()
	{
		$users = new Model_User();
		$view = View::Factory("login.php");

 		$user = $users->getUser(1);

		$view->user=$uuser;
		$this->response->body($view);
 	}


} // End Posts
