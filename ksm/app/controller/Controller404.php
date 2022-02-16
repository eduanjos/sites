<?php 

namespace App\controller;

// session_start();

class Controller404{

	use \Src\traits\TraitRender;

	public function __construct(){

		// if (isset($_SESSION['email']) && ($_SESSION['adm'] == false)) {

		// 	header("Location: ".DIRPAGE."painel"); exit();

		// }elseif (isset($_SESSION['email']) && ($_SESSION['adm'] == true)) {

		// 	header("Location: ".DIRPAGE."adm"); exit();

		// }else{

			$this->setCamada("site");
			$this->setDir("404");
			$this->renderLayout();
		// }
	}
}
?>