<?php 

namespace Src\traits;

trait TraitMensagem{

	# Retorna mensagens
	public function msg($tipo,$msg){

		if ($tipo === 'warning' || $tipo === 'danger') {
			
			$strong = 'ATENÇÃO!';
		}else{
			$strong = 'PARABÉNS!';
		}
		echo "<div class='text-center alert alert-$tipo alert-dismissible fade show' role='alert'>
		<strong>$strong </strong>$msg
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<span aria-hidden='true'>&times;</span>
		</button>
		</div>";
	}
}

 ?>