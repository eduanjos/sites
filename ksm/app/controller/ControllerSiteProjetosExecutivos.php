<?php 

namespace App\controller;

class ControllerSiteProjetosExecutivos{
	
	use \Src\traits\TraitUrl, \Src\traits\TraitRender, \Src\traits\TraitFilter, \Src\traits\TraitMensagem;
	
	public function __construct() {

		$this->setTitle("Projetos Executivos | KSM");
		$this->setSiteName("KSM");
		$this->setOgType("website");
		$this->setFbAdmins("ksmsolucoesemobras");
		$this->setDescription("Projetos Executivos. Arquitetônico, Hidráulico, Elétrico, Estrutural,
			Modulação, 3D.");
		$this->setKeywords("Hidráulico, Elétrico, Modulação");
		$this->setAuthor("EP Criação");
		$this->setCamada("site");
		$this->setDir("projetos-executivos");
		$this->renderLayout();
	}
}
?>