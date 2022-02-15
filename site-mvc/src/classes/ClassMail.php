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
		$mailer->Host       = "";
		$mailer->SMTPAuth   = true;
		$mailer->Username   = "";
		$mailer->Password   = "";
		$mailer->SMTPSecure = "";
		$mailer->Port       = 587;
		$mailer->FromName   = "";
		$mailer->From 	    = "";
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