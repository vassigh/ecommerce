<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Posts extends Controller {


	public function action_index()
	{

		$this->action_page();
	              
	}


	public function action_page()
	{
		$posts = new Model_Post();
		$view = View::Factory("/user/post");

		$id = $this->request->param('id',1);

 		$nompst = $posts->getLatestPosts(0, 0);
 		$limit= 4;              // limit de news par page
        $nbpages= intval(count($nompst)/$limit);
        if(count($nompst)%$limit > 0) $nbpages++;
        $view->nbpages=$nbpages;


		$nompst = $posts->getLatestPosts($limit, $limit*($id-1));

		$view->nompst=$nompst;
		$this->response->body($view);
 	}

	public function action_contenu()
	{
		$posts = new Model_Post();
		$view = View::Factory("/user/contenu");

		$id = $this->request->param('id',1);

 		$nompst = $posts->getLatestPosts(0, 0);
 		$limit= 4;              // limit de news par page
        $nbpages= intval(count($nompst)/$limit);
        if(count($nompst)%$limit > 0) $nbpages++;
        $view->nbpages=$nbpages;


		$nompst = $posts->getLatestPosts($limit, $limit*($id-1));

		$view->nompst=$nompst;
		$this->response->body($view);
 	}


} // End Posts
