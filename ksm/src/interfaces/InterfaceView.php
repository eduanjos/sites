<?php 
namespace Src\interfaces;

interface InterfaceView{

	public function setDir($dir);
	public function setTitle($title);
	public function getSiteName($siteName);
	public function getOgType($ogType);
	public function getFbAdmins($fbAdmins);
	public function setDescription($desc);
	public function setKeywords($key);
	public function renderLayout();
}

 ?>