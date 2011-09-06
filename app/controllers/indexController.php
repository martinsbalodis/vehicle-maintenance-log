<?php

namespace app\controllers;

use app\models\maintance;

class IndexController extends \lithium\action\Controller {

	public function index() {
		
		return $this->render(array('layout' => false));
	}

	/**
	 * Add Maintance
	 */
	public function add() {
		
		// Add a new maintance log
		if ($this->request->data) {
			$post = Maintance::create($this->request->data);
			$success = $post->save();
		}
	}
	
	/**
	 * List all maintances
	 */
	public function maintance_list() {
		
		// Search parameters
		$search = '';
		
		// Search maintace log
		if ($this->request->data && $this->request->data['search']) {
			$search =  $this->request->data['search'];
		}
		
		
		$maintances = Maintance::find('all');
		
		return compact('maintances','search');
	}
}

?>