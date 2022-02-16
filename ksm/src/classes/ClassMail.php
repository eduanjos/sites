<?php 

namespace Src\classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'vendor/autoload.php';

class ClassMail {

	use \Src\traits\TraitUrl, \Src\traits\TraitRender, \Src\traits\TraitMensagem;

	public function enviar($msg){

		$mailer = new PHPMailer;
		$mailer->CharSet    = "utf8";
		// $mailer->SMTPDebug = 3;
		$mailer->IsSMTP();
		$mailer->Host       = "SMTP.titan.email";
		$mailer->SMTPAuth   = true;
		$mailer->Username   = "contato@pontusfidelidade.com.br";
		$mailer->Password   = "**SitePontus**";
		$mailer->SMTPSecure = "tls";
		$mailer->Port       = 587;
		$mailer->FromName   = "Pontus Fidelidade";
		$mailer->From 	    = "contato@pontusfidelidade.com.br";
		$mailer->AddAddress($msg['destinatario']);
		$mailer->IsHTML(true);
		$mailer->Subject    = $msg['titulo'];
		$mailer->Body       = $msg['conteudo'];

		if($mailer->Send()){

			$this->msg("success",$msg['retorno']);
		}else{
			$this->msg("danger"," Mensagem não enviada.");
		}
	}
}
?>