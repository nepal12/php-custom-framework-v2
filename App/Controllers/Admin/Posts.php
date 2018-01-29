<?php

namespace App\Controllers\Admin;

use \Core\View;
use App\Models\Post_Model;

class Posts{

	public function index() {
		$data['pagetitle'] = 'Dashboard - Posts';
		$viewmodel = new Post_Model();
		$data['posts'] = $viewmodel->getPosts() ;	// get list of posts

		View::renderAdminTemplate($data, "App/Views/admin/posts/index.php") ;
		
	}
	
	public function edit() {
		$data['pagetitle'] = 'Dashboard - Edit Posts';

		$data['postid'] = $viewmodel->getPostById($postid['id'] );
		View::renderAdminTemplate($data, "App/Views/admin/edit/index.php") ;
	}

}