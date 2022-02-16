<?php 

namespace Src\traits;

trait TraitUrl{

	public function getUrl(){

		# FILTER_SANITIZE_URL limpa a URL quando o valor é 1
		// return explode("/", trim($_GET['url'],FILTER_SANITIZE_URL));

		return explode("/", trim($_GET['url']));
	}
}

 ?>