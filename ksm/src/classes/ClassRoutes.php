<?php 

namespace Src\classes;

use Src\traits\TraitUrl;

class ClassRoutes{

	use TraitUrl;

	private $rota;

	public function getRota(){

		# Pega toda URL
		$url = $this->getUrl();

		#Perfil para empresa
		if ($url[0] == "painel") {

			if (!empty($url[1])) {
				# Pega apenas a segunda parte da URL
				$i = $url[1];
			}else{
				$i = "";
			}

			$this->rota = array(
				
			);

		#Perfil para cliente
		}elseif($url[0]=="user"){

			if (!empty($url[1])) {
				
				$i = $url[1];
			}else{
				$i = "";
			}

			$this->rota = array(
				
			);
		
		#Perfil para administrador
		}elseif($url[0] == "adm"){

			if (!empty($url[1])) {
				
				$i = $url[1];
			}else{
				$i = "";
			}

			$this->rota = array(
				
			);

		}else{
			# Pega apenas a primeira parte da URL
			$i = $url[0];

			$this->rota = array(
				""     	   	  => "ControllerSiteHome",
				"home" 	   	  => "ControllerSiteHome",
				"acabamentos" => "ControllerSiteAcabamentos",
				"modelos"     => "ControllerSiteModelos"
			);
		}

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