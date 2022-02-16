<?php 

namespace App\controller;

class ControllerSiteAcabamentos {
	
	use \Src\traits\TraitUrl, \Src\traits\TraitRender, \Src\traits\TraitFilter, \Src\traits\TraitMensagem;
	
	public function __construct() {

		$this->setTitle("Acabamentos | KSM");
		$this->setSiteName("KSM");
		$this->setOgType("website");
		$this->setFbAdmins("ksmsolucoesemobras");
		$this->setDescription("Soluçoes Sustentáveis em Obras. Tijolos Ecológicos.");
		$this->setKeywords("Tijolo Ecológico, Construção Civil, KSM");
		$this->setAuthor("EP Criação");
		$this->setCamada("site");
		$this->setDir("acabamentos");
		$this->renderLayout();
	}
}
?>