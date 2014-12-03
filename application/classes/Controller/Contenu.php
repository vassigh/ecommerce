<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contenu extends Controller {


	public function action_index()
	{
		$this->action_contenus();
 	}


	public function action_contenus()
	{
		session_start();
		$contenus = new Model_contenu();
		$view = View::Factory("contenus");

		$contenu = $contenus->getContenu($this->request->param('id'));

		$view->contenu=$contenu;
		$this->response->body($view);
 	}


} // End 
