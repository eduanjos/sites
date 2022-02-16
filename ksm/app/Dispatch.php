<?php

namespace App;

use Src\classes\ClassRoutes;

use App\controller\Controller404;

class Dispatch extends ClassRoutes {

	private $obj;
	private $method;
	private $param = [];

	public function __construct(){

		self::addController();
	}

	public function getMethod() {
	    return $this->method;
	}
	 
	public function setMethod($method) {
	    $this->method = $method;
	}

	public function getParam() {
	    return $this->param;
	}
	 
	public function setParam($param) {
	    $this->param = $param;
	}

	public function addController(){

		# Pega o controller
		$rotaController = $this->getRota();

		# Cria um namespace dinâmico
		$namespace = "App\\controller\\{$rotaController}";

		# Instância um objeto
		$this->obj = new $namespace;

		# Logado no sistema
		if ($this->getUrl()[0] == "painel" || $this->getUrl()[0] == "user" || $this->getUrl()[0] == "adm") {

			# Verifica se tem um método na URL
			if(!empty($this->getUrl()[2])){

			# Verifica caracteres na URL
				if(strripos($this->getUrl()[2],"-")){

				# Modifica caracteres
					$this->setMethod(str_replace("-","_",$this->getUrl()[2]));
				}else{
					$this->setMethod($this->getUrl()[2]);
				}

				self::addMethod();
			}

		}else{
			# Páginas do Site
			if(!empty($this->getUrl()[1])){

				# Verifica caracteres na URL
				if(strripos($this->getUrl()[1],"-")){

				# Modifica caracteres
					$this->setMethod(str_replace("-","_",$this->getUrl()[1]));
				}else{
					$this->setMethod($this->getUrl()[1]);
				}

				self::addMethod();
			}
		}
	}

	public function addMethod(){

		#Verifica se existe esse método dentro da classe do objeto instanciado
		if (method_exists($this->obj, $this->getMethod())) {
			
			// $this->setMethod("{$this->getUrl()[1]}");

			self::addParam();
			#Chama o método existente em determinado objeto passando os parâmetros
			call_user_func_array([$this->obj,$this->getMethod()], $this->getParam());
		
		}else{

			// echo "Método não encontrado [dispatch - linha:73]";
			$x = new Controller404();
			// if (isset($_SESSION['camada'])) {
				
			// 	if ($_SESSION['camada'] == "adm"){

			// 		header("Location: ".DIRPAGE."adm");

			// 	}elseif ($_SESSION['camada'] == "painel") {

			// 		header("Location: ".DIRPAGE."painel");
			// 	}
				
			// 	exit();
			// }
			
			
		}
	}

	#Método de adição de parâmetro de controller
	public function addParam(){
		#Calcula o total de valor que está na URL
		$contArray = count($this->getUrl());

		if ($this->getUrl()[0] == "painel" || $this->getUrl()[0] == "user" || $this->getUrl()[0] == "adm") {
			
			#Acima de 3 significa que tem parametro
			if ($contArray > 3) {

				foreach ($this->getUrl() as $key => $value) {
				#Key acima de 1 é um parâmetro
					if ($key > 2) {
					#Contabiliza os parâmetros e armazena em um vetor
						$this->setParam($this->param += [$key => $value]);
					}
				}
			}

		}else{

			#Acima de 2 significa que tem parametro
			if ($contArray > 2) {

				foreach ($this->getUrl() as $key => $value) {
				#Key acima de 1 é um parâmetro
					if ($key > 1) {
					#Contabiliza os parâmetros e armazena em um vetor
						$this->setParam($this->param += [$key => $value]);
					}
				}
			}
		}
	}

}
?>