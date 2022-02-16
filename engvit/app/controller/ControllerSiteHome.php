<?php 

namespace App\controller;

class ControllerSiteHome {
	
	use \Src\traits\TraitUrl, \Src\traits\TraitRender, \Src\traits\TraitFilter, \Src\traits\TraitMensagem;
	
	public function __construct() {

		$this->setTitle("ENGVIT | Construções");
		$this->setSiteName("Engvit Construções");
		$this->setOgType("website");
		$this->setFbAdmins("engvit");
		$this->setDescription("A solução a altura que você precisa");
		$this->setKeywords("Construção Civil, Reparação de Fachada, Impermeabilizações");
		$this->setAuthor("EP Criação");
		$this->setCamada("site");
		$this->setDir("home");
		$this->renderLayout();
	}
}
?>