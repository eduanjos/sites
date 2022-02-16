<?php 
namespace Src\traits;

trait TraitRender{

	private $title, $siteName, $ogType, $fbAdmins, $description, $keywords, $author, $dir, $camada;

	protected function getCamada() {
	    return $this->camada;
	}
	protected function setCamada($camada) {
	    $this->camada = $camada;
	}
	protected function getTitle() {
	    return $this->title;
	}
	protected function setTitle($title) {
	    $this->title = $title;
	}
	protected function getSiteName() {
	    return $this->siteName;
	}
	protected function setSiteName($siteName) {
	    $this->siteName = $siteName;
	}
	protected function getOgType() {
	    return $this->ogType;
	}
	protected function setOgType($ogType) {
	    $this->ogType = $ogType;
	}
	protected function getFbAdmins() {
	    return $this->fbAdmins;
	}
	protected function setFbAdmins($fbAdmins) {
	    $this->fbAdmins = $fbAdmins;
	}
	protected function getDescription() {
	    return $this->description;
	} 
	protected function setDescription($description) {
	    $this->description = $description;
	}
	protected function getKeywords() {
	    return $this->keywords;
	}
	protected function setKeywords($keywords) {
	    $this->keywords = $keywords;
	}
	protected function getAuthor() {
	    return $this->author;
	} 
	protected function setAuthor($author) {
	    $this->author = $author;
	}
	protected function getDir() {
	    return $this->dir;
	} 
	protected function setDir($dir) {
	    $this->dir = $dir;
	}

	public function addCSS(){
		
		if (file_exists(DIRREQ."public/css/{$this->getCamada()}/{$this->getDir()}.css")) {

			echo "<link rel='stylesheet' href=".DIRCSS.$this->getCamada()."/".$this->getDir().".css>";
		}
	}	

	public function addLib(){
		
		if (file_exists(DIRREQ."app/view/{$this->getCamada()}/{$this->getDir()}/lib.php")) {

			include(DIRREQ."app/view/{$this->getCamada()}/{$this->getDir()}/lib.php");
		}
	}

	public function addStyle(){
		
		if (file_exists(DIRREQ."public/css/{$this->getCamada()}/style.css")) {

			echo "<link rel='stylesheet' href=".DIRCSS.$this->getCamada()."/style.css>";
		}
	}	

	public function addHeader(){
		
		if (file_exists(DIRREQ."app/view/{$this->getCamada()}/{$this->getDir()}/header.php")) {

			include(DIRREQ."app/view/{$this->getCamada()}/{$this->getDir()}/header.php");
		}else{
			include(DIRREQ."app/view/{$this->getCamada()}/generic/header.php");
		}
	}

	public function addMain(){

		if (file_exists(DIRREQ."app/view/{$this->getCamada()}/{$this->getDir()}/main.php")) {

			include(DIRREQ."app/view/{$this->getCamada()}/{$this->getDir()}/main.php");
		}
	}

	public function addJS(){
		
		if (file_exists(DIRREQ."public/js/{$this->getCamada()}/{$this->getDir()}.js")) {
			
			echo "<script src=".DIRJS.$this->getCamada()."/".$this->getDir().".js></script>";
		}
	}

	public function addScript(){
		
		if (file_exists(DIRREQ."public/js/{$this->getCamada()}/script.js")) {
			
			echo "<script src=".DIRJS.$this->getCamada()."/script.js></script>";
		}
	}	

	public function addFooter(){

		if (file_exists(DIRREQ."app/view/{$this->getCamada()}/{$this->getDir()}/footer.php")) {

			include(DIRREQ."app/view/{$this->getCamada()}/{$this->getDir()}/footer.php");
		}else{
			include(DIRREQ."app/view/{$this->getCamada()}/generic/footer.php");
		}
	}

	public function renderLayout(){

		if (file_exists(DIRREQ."app/view/layout.php")) {

			require_once(DIRREQ."app/view/layout.php");
		}
	}


}
 ?>