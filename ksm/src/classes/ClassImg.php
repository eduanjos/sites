<?php 
/**
 * Classe para manipulação de imagens
 * @author: Eduardo Pereira
 * @version: 1.0
 * @date 24/11/2019
 * Requerido: PHP 5 e GD Library
 */

namespace Src\classes;

class ClassImg {

	private $erro;

	private $lMax;
	private $aMax;
	private $dest1;
	private $lMin;
	private $aMin;
	private $dest2;
	private $tamax;
	private $img;
	private $extensao;
	private $mimetype;
	private $retorno = array('erro' => false, 'msg' => null,'img' => null);

	public function __construct($lMax,$aMax,$dest1,$lMin,$aMin,$dest2,$tamax){
		
		$this->lMax  = $lMax;
		$this->aMax  = $aMax;
		$this->dest1 = $dest1;
		$this->lMin  = $lMin;
		$this->aMin  = $aMin;
		$this->dest2 = $dest2;
		$this->tamax = $tamax;
	}

	public function setErro($x){
		$this->erro = $x;
	}
	public function getErro(){
		return $this->erro;
	}

	public function setRetorno($e,$m,$i){

		$this->retorno["erro"] = $e;

		$this->retorno["msg"]  = $m;

		$this->retorno["img"]  = $i;
	}
	public function getRetorno(){

		return $this->retorno;
	}

	public function upload($file){

		if (isset($file['imagem']['name']) && $file['imagem']['error'] == 0) {

			$this->size($file['imagem']['size']);

			if ($this->getErro() == true) {
				
				$this->setRetorno(
					true,
					"Seu arquivo é maior do que 1Mb.",
					NULL
				);
				return $this->getRetorno();
			}

			$this->setMimeType($file['imagem']['tmp_name']);

			if ($this->getErro() == true) {
				
				$this->setRetorno(
					true,
					"Arquivo corrompido.",
					NULL
				);
				return $this->getRetorno();
			}

			$this->idArquivo($file['imagem']['name']);
			
			if ($this->getErro() == true) {
				
				$this->setRetorno(
					true,
					"Só é permitido arquivos <b>JPG, JPEG, GIF ou PNG</b>.",
					NULL
				);
				return $this->getRetorno();
			}

			$this->moveUpload($file['imagem']['tmp_name']);

			if ($this->getErro() == true) {
				
				$this->setRetorno(
					true,
					"Erro ao salvar o arquivo. Você não tem permissão de escrita.",
					NULL
				);
				return $this->getRetorno();
			}

			return $this->resize($this->dest2,$this->lMin,$this->aMin);
			#Utilizado para salvar outro tamanho de imagem
			// $this->resize($this->dest1,$this->lMax,$this->aMax);
			// return $tst = $this->resize($this->dest2,$this->lMin,$this->aMin);

		}else{

			$this->setRetorno(
				true,
				"Nenhum arquivo foi carregado.",
				NULL
			);
			return $this->getRetorno();
		}
	}

	// Limita tamanho do upload
	private function size($tam){

		if ($tam > $this->tamax) {
			
			return $this->setErro(true);			
		}
	}

	//Verifica o mimetype do arquivo
	private function setMimeType ($filename) {

	    // if (function_exists('mime_content_type')) {
	    //     $this->mimetype = mime_content_type($filename);
	    // }
	 	// $finfo = new finfo(FILEINFO_MIME, "");
		// echo $finfo->file($filename);

	    if (function_exists('finfo_open')) {

	        $finfo = finfo_open(FILEINFO_MIME_TYPE);

	        $this->mimetype = finfo_file($finfo, $filename);

	        finfo_close($finfo);

	    }else {

	        return $this->setErro(true);
	    }
	}

	//ID para o arquivo: diretório+nome-unico+extensão
	private function idArquivo($nome){

		$tbMime = explode("/", $this->mimetype);

		$this->extensao = $tbMime[1];

		// Definindo extensão de imagem que será aceita
		if (strstr ( 'jpg;jpeg;gif;png', $this->extensao )) {

			// Cria um nome único para esta imagem
			// Evita nomes com acentos, espaços e caracteres não alfanuméricos
			$this->img =  md5(time()).rand(0,1000000).'.'.$this->extensao;

		}else{

			$this->setErro(true);
		}
	}

	//Tenta mover o arquivo temporário
	private function moveUpload($temp){
		// Concatena a pasta com o nome da imagem
		#Utilizado para salvar outro tamanho de imagem
		// $this->dest1 = $this->dest1 . $this->img;
		$this->dest2 = $this->dest2 . $this->img;
		
		#Utilizado para salvar outro tamanho de imagem		
		// if (copy($temp, $this->dest2) and @move_uploaded_file($temp, $this->dest1)) {
		if (@move_uploaded_file($temp, $this->dest2)) {

		}else{

			return $this->setErro(true);
		}
	}

	//Redimensiona o tamanho da imagem
	private function resize($arquivo,$l,$a){

		//Lista as medidas originais da imagem
		list($l_orig, $a_orig) = getimagesize($arquivo);
		//O cálculo do ratio retorna uma imagem redimensionada proporcionalmente
		$ratio = $l_orig / $a_orig;
		//Aplicando a fórmula com base no rátio
		if ($l / $a > $ratio) {

			$l = $a * $ratio;

		}else{

			$a = $l / $ratio;
		}

		//Cria uma nova imagem true color / Com base no tamanho proporcional
		$img_resized = imagecreatetruecolor($l, $a);

		//Abre a imagem orginal e aplica o redimensionamento na mesma
		if ($this->extensao == "png") {

			//Criando identificador para imagem original
			$img_orig  = imagecreatefrompng($arquivo);
			// SE FOR PNG - MANTER TRANSPARÊNCIA
			// Representação inteira da cor preta (rgb: 0,0,0)
			$background = imagecolorallocate($img_resized , 0, 0, 0);
			// Removendo o preto do espaço reservado da cor preta
			imagecolortransparent($img_resized, $background);
			// Desativando a mistura alfa (para garantir informações do canal alfa
			// é preservado, em vez de removido (mesclando com o resto da imagem na forma de preto))
			imagealphablending($img_resized, false);
			// Ativando a economia de informações do canal alfa (para garantir o alcance total da transparência é preservada)
			imagesavealpha($img_resized, true);

			$img_final = $this->imgResampled($img_resized,$img_orig, $l,$a,$l_orig,$a_orig);

			//Salva nova imagem redimensionada
			imagepng($img_final, $arquivo);

		}elseif ($this->extensao == "gif") {

			//Criando identificador para imagem original
			$img_orig  = imagecreatefromgif($arquivo);
			$img_final = $this->imgResampled($img_resized,$img_orig, $l,$a,$l_orig,$a_orig);

			//Salva nova imagem redimensionada
			imagegif($img_final, $arquivo);

		}else{

			//Criando identificador para imagem original
			$img_orig  = imagecreatefromjpeg($arquivo);
			$img_final = $this->imgResampled($img_resized,$img_orig, $l,$a,$l_orig,$a_orig);

			//Salva nova imagem redimensionada
			imagejpeg($img_final, $arquivo);
		}

		//Destruindo imagem original
		imagedestroy($img_orig);

		$this->setRetorno(
			false,
			"Imagem carregada com sucesso.",
			$this->img
		);
		return $this->getRetorno();
	}

	//Setando o redimensionamento na imagem original
	private function imgResampled($img_resized,$img_orig,$l,$a,$l_orig,$a_orig){

		imagecopyresampled(
			$img_resized, $img_orig,
			0, 0, 0, 0,
			$l, $a,
			$l_orig, $a_orig);

		return $img_resized;
	}
}
?>