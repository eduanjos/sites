<?php 

	namespace App\controller;

	class ControllerSiteHome {
		
		use \Src\traits\TraitUrl, \Src\traits\TraitRender, \Src\traits\TraitFilter, \Src\traits\TraitMensagem;
		
		public function __construct() {

			$this->setTitle("Pontus | Sistema para Fidelizar Clientes");
			$this->setSiteName("Pontus Fidelidade");
			/*
			Atividades (activity,sport)
			Negócios (bar,company,cafe,hotel,restaurant)
			Grupos (cause,sports_league,sports_team)
			Organizações (band,government,non_profit,school,university)
			Pessoas (actor,athlete,author,director,musician,politician,public_figure)
			Locais (city,country,landmark,state_province)
			Produtos e entretenimento (album,book,drink,food,game,product,song,movie,tv_show)
			Websites (blog,website,article)
			*/
			$this->setOgType("website");
			$this->setFbAdmins("PAGINA-DO-FACEBOOK");
			
			$this->setDescription("DESCRIÇÃO-DO-SITE");
			$this->setKeywords("PALAVRA-CHAVE, PALAVRA-CHAVE, PALAVRA-CHAVE");
			$this->setAuthor("EP Criação");
			$this->setCamada("site");
			$this->setDir("home");
			$this->renderLayout();
		}
	}
?>