<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Título -->
	<title><?=$this->getTitle();?></title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-71302650-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-71302650-2');
  </script>
	<!-- Character encoding for Unicode -->
	<meta charset="utf-8">
	<!-- Viewport para Mobile -->
  	<meta name="viewport" 	 content="width=device-width, initial-scale=1.0">
  	<!-- Compatibilidade para Internet Explore -->
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--[if lt IE 9]>
	<script src="bower_components/html5shiv/dist/html5shiv.js"></script>
	<![endif]-->
 	<!-- Favicon Icon -->
  <!-- Cache -->
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="-1">
  <!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?=DIRIMG?>site/favicon.png">

  	<!-- SEO -->
  	<meta property="site_name" 		  content="<?=$this->getSiteName();?>">
  	<meta name="description"   		  content="<?=$this->getDescription();?>">
  	<meta name="keywords" 	   		  content="<?=$this->getKeywords();?>">
  	<meta name="author" 	   		    content="<?=$this->getAuthor();?>">
  	<meta name="robots"        		  content="index, follow">
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  	<meta name="language" 			    content="Portuguese">

  	<!-- Facebook Open Graph -->
  	<meta property="og:title" 		  content="<?=$this->getTitle();?>">
  	<meta property="og:type" 		    content="<?=$this->getOgType();?>">
  	<meta property="og:description" content="<?=$this->getDescription();?>">
  	<meta property="og:image" 		  content="<?=DIRIMG?>site/og-image.png">
  	<meta property="og:url" 		    content="<?=DIRPAGE?>">
  	<meta property="og:site_name" 	content="<?=$this->getSiteName();?>">
  	<meta property="fb:admins" 		  content="<?=$this->getFbAdmins();?>">

  	<!-- Twitter Cards -->
  	<meta name="twitter:card" 			     content="summary">
  	<meta property="twitter:url" 		     content="<?=DIRPAGE?>">
  	<meta property="twitter:title" 		   content="<?=$this->getTitle();?>">
  	<meta property="twitter:description" content="<?=$this->getDescription();?>">
  	<meta property="twitter:image" 		   content="<?=DIRIMG?>site/twitter-image.png">

  	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<!-- jQuery library -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<!-- Popper JS -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
  	<!-- Icons Google -->
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<!-- Font Awesome -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css">
  	<!-- Bibliotecas Extenas -->
  	<?=$this->addLib();?>
  	<!-- CSS Global -->
    <?=$this->addStyle();?>
  	<!-- CSS Específico -->
  	<?=$this->addCSS();?>
</head>
<body>
	<!-- Cabeçalho -->
	<?=$this->addHeader();?>
	<!-- Interface -->
	<?=$this->addMain();?>
	<!-- Rodapé -->
	<?=$this->addFooter();?>
	<!-- Script Global -->
  <?=$this->addScript();?>
	<!-- Script Específico -->
	<?=$this->addJS();?>
</body>
</html>