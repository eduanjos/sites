<?php 

namespace Src\classes;

use Src\traits\TraitUrl;

class ClassRoutes{

	use TraitUrl;

	private $rota;

	public function getRota(){

		# Pega toda URL
		$url = $this->getUrl();

		# Pega apenas a primeira parte da URL
		$i = $url[0];

		$this->rota = array(
			""     	  => "ControllerSiteHome",
			"home" 	  => "ControllerSiteHome",
			"contato" => "ControllerSiteContato"
		);

		#Verifica se a URL está contida nas rotas pré definidas
		if(array_key_exists($i, $this->rota)){

			#Procura arquivo no sistema
			if (file_exists(DIRREQ."app/controller/{$this->rota[$i]}.php")){

				return $this->rota[$i];
			}else{
				return "ControllerSiteHome";
			}
		
		}else{
			return "Controller404";
		}
	}
}
?>