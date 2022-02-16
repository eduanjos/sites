<?php 

namespace Src\classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ClassMail {

	use \Src\traits\TraitUrl, \Src\traits\TraitRender, \Src\traits\TraitMensagem;

	public function enviar($msg){

		$mailer = new PHPMailer;
		$mailer->CharSet    = "utf8";
		// $mailer->SMTPDebug = 3;
		$mailer->IsSMTP();
		$mailer->Host       = "mail.engvit.com.br";
		$mailer->SMTPAuth   = true;
		$mailer->Username   = "site@engvit.com.br";
		$mailer->Password   = "wNwnt#ZV)DXk";
		$mailer->SMTPSecure = "tls";
		$mailer->Port       = 587;
		$mailer->FromName   = $msg['nome-remetente'];
		$mailer->From 	    = $msg['email-remetente'];
		$mailer->AddAddress($msg['destinatario']);
		$mailer->IsHTML(true);
		$mailer->Subject    = $msg['assunto'];
		$mailer->Body       = $msg['conteudo'];

		if($mailer->Send()){
			$this->msg("success",$msg['retorno']);
		}else{
			$this->msg("danger"," Mensagem não enviada.");
			$mailer->ErrorInfo;
		}
	}
}
?>