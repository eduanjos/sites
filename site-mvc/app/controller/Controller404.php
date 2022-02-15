<?php 

namespace App\controller;

class Controller404{

	use \Src\traits\TraitRender;

	public function __construct(){

		$this->setCamada("site");
		$this->setDir("404");
		$this->renderLayout();
	}
}
?>