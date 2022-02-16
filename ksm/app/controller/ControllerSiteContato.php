<?php 

namespace App\controller;

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
// use Src\classes\ClassMensagens;
// use Src\classes\ClassRender;

use Src\classes\ClassMail;

class ControllerSiteContato {
	
	// use \Src\traits\TraitUrl;
	use \Src\traits\TraitUrl, \Src\traits\TraitRender, \Src\traits\TraitFilter, \Src\traits\TraitMensagem;

	private $layout, $tel, $mensagem;

	public function __construct() {
		
		if (empty($this->getUrl()[1])) {

			// $render = new ClassRender();
			$this->setTitle("Fale Conosco | Pontus Fidelidade");
			$this->setSiteName("Pontus Fidelidade");
			$this->setOgType("website");
			$this->setFbAdmins("pontusfidelidade");
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
		#Valida Form
		$this->setNome(trim($_GET['nome']));
		$this->setTel(trim($_GET['tel']));
		$this->setEmail(trim($_GET['mail']));
		$this->setMensagem(trim($_GET['msg']));

		// $this->setNome('teste nome');
		// $this->setTel('teste telefone');
		// $this->setEmail('teste email');
		// $this->setMensagem('teste mensagem');

		if ($this->getTel()=='' && $this->getEmail()=='') {

			$this->msg("warning","Favor informar o Telefone ou E-mail para contato.");
			exit();
		}

		#Monta Layout
		$tag =  "<h1>Formulário do Site</h1>";
		$tag .= "<p><strong>Nome: </strong>".$this->getNome()."</p>";
		$tag .= "<p><strong>Telefone: </strong><a href='tel.:".$this->getTel()."'>".$this->getTel()."</a></p>";
		$tag .= "<p><strong>E-mail: </strong>".$this->getEmail()."</p>";
		$tag .= "<p><strong>Mensagem: </strong>".$this->getMensagem()."</p>";

		$this->setLayout($tag);

		#Envia E-mail
		$mail = new ClassMail();

		$mensagem = array(
			"destinatario" => 'contato@pontusfidelidade.com.br',
			"titulo"       => "Fale Conosco",
			"retorno"      => "Mensagem enviada com sucesso. Entraremos em contato em breve.",
			"conteudo"     => $this->getLayout()
		);

		$mail->enviar($mensagem);
	}
}

?>