<?php 
namespace Src\traits;

trait TraitFilter{

	protected $conexao, $id, $avatar, $nome, $email, $senha, $nivel, $token, $data, $ref;

	protected function getConexao() {
	    return $this->conexao;
	}
	protected function setConexao($conexao) {
	     $this->conexao = $conexao;
	}
	protected function getId() {
	    return $this->id;
	}
	protected function setId($id) {
	     $this->id = self::filter($id);
	}
	protected function getAvatar() {
	    return $this->avatar;
	}
	protected function setAvatar($avatar) {
	     $this->avatar = self::filter($avatar);
	}
	protected function getNome() {
	    return $this->nome;
	}
	protected function setNome($nome) {
	    $this->nome = self::filter($nome);
	}
	protected function getEmail(){
		return $this->email;
	}
	protected function setEmail($email){
		$this->email = self::filter($email);
	}
	protected function getSenha(){
		return $this->senha;
	}
	protected function setSenha($senha){
		$this->senha = self::filter($senha);
	}
	protected function getNivel() {
	    return $this->nivel;
	}
	protected function setNivel($nivel) {
	     $this->nivel = self::filter($nivel);
	}
	protected function getToken() {
	    return md5('encrypt'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
	}
	protected function getData() {
	    return $this->data;
	}
	protected function setData($data) {
		date_default_timezone_set('America/Sao_Paulo');
		$this->data = date(self::filter($data));
	}
	protected function getRef() {
	    return $this->ref;
	}
	protected function setRef($ref) {
	     $this->ref = self::filter($ref);
	}
	// protected function setToken($token) {
	//      $this->token = $token;
	// }

	#Função para retornar uma string/Array protegidos contra SQL/Blind/XSS Injection
	protected function filter($var) {

		if($var===NULL){ #teste verificar se retorna NULL

			return NULL;

		}elseif( !is_array($var)) {

			$var = preg_replace('/(from|select|insert|delete|where|drop|union|order|update|database)/i', '', $var);

			$var = preg_replace('/(&lt;|<)?script(\/?(&gt;|>(.*))?)/i', '', $var);
			
			$tbl = get_html_translation_table(HTML_ENTITIES);
			
			$tbl = array_flip($tbl);
			
			$var = addslashes($var);
			
			$var = strip_tags($var);
			
			return strtr($var, $tbl);
			// stripslashes(str)
		}else{
			return array_filter($var);
		}
	}

	#Somente letras
	protected function letter($x){
		return ctype_alpha($x);
	}
	#Somente números
	protected function numb($x){
		return ctype_digit($x);
	}
	#Somente letras e números
	protected function letter_numb($x){
		return ctype_alnum($x);
	}
	#Retorna apenas os números ou false
	protected function ignore_letter($x){
		if (is_numeric(preg_replace("/[^0-9]/", "", $x))) {
			return preg_replace("/[^0-9]/", "", $x);
		}else{
			return false;
		}
	}

}
 ?>