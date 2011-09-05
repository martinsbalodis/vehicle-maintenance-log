<?php

namespace app\controllers;

class IndexController extends \lithium\action\Controller {

	public function index() {
		
		return $this->render(array('layout' => false));
	}

	public function add() {
		
	}
}

?>