<?php 

namespace App\controller;

use Src\classes\ClassMail;

class ControllerSiteContato {
	
	use \Src\traits\TraitUrl, \Src\traits\TraitRender, \Src\traits\TraitFilter, \Src\traits\TraitMensagem;

	private $layout, $tel, $mensagem;

	public function __construct() {
		
		if (empty($this->getUrl()[1])) {

			$this->setTitle("Fale Conosco | ENGVIT");
			$this->setSiteName("Engvit Construções");
			$this->setOgType("website");
			$this->setFbAdmins("engvit");
			$this->setDescription("Central de Relacionamentos com Clientes.Sua Opinião é Importante para que o nosso Atendimento Evolua Constantemente.");
			$this->setKeywords("Fale Conosco, Central de Relacionamento, SAC");
			$this->setAuthor("EP Criação");
			$this->setCamada("site");
			$this->setDir("contato");
			$this->renderLayout();
		}
	}

	private function getLayout() {
	    return $this->layout;
	}
	 
	private function setLayout($layout) {
	    $this->layout = $layout;
	}

	private function getTel() {
	    return $this->tel;
	}
	
	private function setTel($tel) {
	    return $this->tel = $tel;
	}

	private function getMensagem() {
	    return $this->Mensagem;
	}
	
	private function setMensagem($Mensagem) {
	    return $this->Mensagem = $Mensagem;
	}

	public function mail(){

		#nome
		if(empty(trim($_GET['nome']))){
			
			$this->msg("warning","Favor informar o nome para contato.");
			exit();
		}else{
			$this->setNome(trim($_GET['nome']));
		}
		
		$this->setTel(trim($_GET['fone']));

		#email
		if(empty(trim($_GET['email']))){
			
			$this->msg("warning","Favor informar o e-mail para contato.");
			exit();
		}else{
			$this->setEmail(trim($_GET['email']));
		}
		
		$this->setMensagem(trim($_GET['msg']));

		if($this->getTel()=='' && $this->getEmail()==''){

			$this->msg("warning","Favor informar o Telefone ou E-mail para contato.");
			exit();
		}

		#Monta Layout
		$html =  "<h1>Formulário do Site</h1>";
		$html .= "<p><strong>Nome: </strong>".$this->getNome()."</p>";
		$html .= "<p><strong>Telefone: </strong><a href='tel.:".$this->getTel()."'>".$this->getTel()."</a></p>";
		$html .= "<p><strong>E-mail: </strong>".$this->getEmail()."</p>";
		$html .= "<p><strong>Mensagem: </strong>".$this->getMensagem()."</p>";

		$this->setLayout($html);
		
		$mail = new ClassMail();

		$mensagem = array(
			"nome-remetente"  => $this->getNome(),
			"email-remetente" => $this->getEmail(),
			"destinatario"    => 'locatrix.obras@gmail.com',
			"assunto"         => "Engvit Construções",
			"retorno"         => "Mensagem enviada com sucesso. Entraremos em contato em breve.",
			"conteudo"        => $this->getLayout()
		);

		// print_r($mensagem);
		$mail->enviar($mensagem);
	}
}

?>