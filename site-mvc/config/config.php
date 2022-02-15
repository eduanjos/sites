<?php 
// Arquivos diretórios raízes
$pastaInterna = "site-mvc/";

// Caminho Absoluto do Servidor
// define("DIRPAGE", "https://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
define("DIRPAGE", "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

// Caminho da URL no Servidor
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == "/") {
	define("DIRREQ", "{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}");
} else {
	define("DIRREQ", "{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");
}

#Diretórios Específicos
define("DIRAUDIO", DIRPAGE."public/audio/");
define("DIRCSS", DIRPAGE."public/css/");
define("DIRFONTES", DIRPAGE."public/fontes/");
define("DIRIMG", DIRPAGE."public/img/");
define("DIRJS", DIRPAGE."public/js/");
define("DIRVIDEO", DIRPAGE."public/video/");
define("DIRLIB", DIRPAGE."public/lib/");

#Acesso ao Banco de Dados
define("HOST", "localhost");
define("DB", "");
define("USER", "");
define("PASS", "");

#Variáveis de Sessão
define("SESSION_NAME", session_name(md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'])));
define("LIFETIME", 18000);
define("PATH", "/");
define("DOMAIN", $_SERVER['HTTP_HOST']);
define("SECURE", true);
define("HTTPONLY", true);
define("SESSION_SET_COOKIE_PARAMS", session_set_cookie_params(LIFETIME, PATH, DOMAIN, SECURE, HTTPONLY));

 ?>