<header id="home" style="position:fixed;width: 100%">
	<div class="navbar-superior bg-dark pt-2 pb-1">
		<div class="container">
			<a href="https://www.instagram.com/epcriacao" target="_blank"><i class="fab fa-instagram-square text-warning mr-2"></i></a>
			<a href="https://api.whatsapp.com/send?phone=5527996340328" target="_blank"><i class="fab fa-whatsapp-square text-warning mr-2"></i></a>
			<a href="https://www.facebook.com/epcriacao/" target="_blank"><i class="fab fa-facebook-square text-warning mr-2"></i></a>
			<span class="text-white mr-2"><strong>
				<a href="tel:27988780451">(27) 98878-0451</a> / <a href="tel:279998390715">(27) 99839-0715</a>
			</strong></span>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="box-header d-flex h-100 justify-content-center align-items-center">
			<a class="navbar-brand" href="<?=DIRPAGE?>">
				<img src="<?=DIRIMG.'site/logo.png'?>">
				<!-- <div class="ml-3 float-right">
					<span>KSM</span>
					<span class="d-block">CONSTRUÇÕES</span>
				</div> -->
			</a>
		</div>
		<button class="navbar-toggler mr-2 openbtn" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" onclick="openNav3();openOffcanvas()">
			<span class="fas fa-bars"></span>
		</button>
		<div class="collapse navbar-collapse" id="">
			<ul class="navbar-nav mr-auto"></ul>
			<ul class="navbar-nav menu-superior">
				<li class="nav-item">
					<a class="nav-link" href="<?=DIRPAGE?>">HOME</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=DIRPAGE?>#section-servico">SERVIÇOS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=DIRPAGE?>#section-quem-somos" style="white-space:nowrap">QUEM SOMOS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=DIRPAGE?>#section-obras">OBRAS EXECUTADAS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=DIRPAGE.'projetos-executivos'?>">PROJETOS EXECUTIVOS</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="<?//=DIRPAGE.'acabamentos'?>">ACABAMENTOS</a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link" href="<?=DIRPAGE?>#section-contato">CONTATO</a>
				</li>
			</ul>
		</div>
	</nav>
</header>
<div style="padding-top: 0px;">
	<div id="mainContent">
		<div id="myCanvasNav" class="overlay3" onclick="closeOffcanvas()" style="width: 0%; opacity: 0;"></div>
		<div id="myOffcanvas" class="offcanvas" style="width: 0%;">
			<a href="javascript:void(0)" class="closeOffcanvas" onclick="closeOffcanvas()">×</a>
			<a href="<?=DIRPAGE?>" onclick="closeOffcanvas()">
				<span class="link-canvas">HOME</span>
			</a>
			<a href="<?=DIRPAGE?>#section-servico" onclick="closeOffcanvas()">
				<span class="link-canvas">SERVIÇOS</span>
			</a>
			<a href="<?=DIRPAGE?>#section-quem-somos" onclick="closeOffcanvas()">
				<span class="link-canvas">QUEM SOMOS</span>
			</a>
			<a href="<?=DIRPAGE?>#section-obras" onclick="closeOffcanvas()">
				<span class="link-canvas">OBRAS EXECUTADAS</span>
			</a>
			<a href="<?=DIRPAGE.'projetos-executivos'?>" onclick="closeOffcanvas()">
				<span class="link-canvas">PROJETOS EXECUTIVOS</span>
			</a>
			<!-- <a href="<?//=DIRPAGE.'acabamentos'?>" onclick="closeOffcanvas()">
				<span class="link-canvas">ACABAMENTOS</span>
			</a> -->
			<a href="<?=DIRPAGE?>#section-contato" onclick="closeOffcanvas()">
				<span class="link-canvas">CONTATO</span>
			</a>
		</div>
		<script>
			function openOffcanvas() {
				document.getElementById("myOffcanvas").style.width = "250px";
				document.getElementById("mainContent").style.marginLeft = "250px";
			}
			function openNav3() {
				document.getElementById("myCanvasNav").style.width = "100%";
				document.getElementById("myCanvasNav").style.opacity = "0.8";  
			}
			function closeOffcanvas() {
				document.getElementById("myOffcanvas").style.width = "0%";
				document.getElementById("mainContent").style.marginLeft= "0%";
				document.body.style.backgroundColor = "white";
				document.getElementById("myCanvasNav").style.width = "0%";
				document.getElementById("myCanvasNav").style.opacity = "0"; 
			}
		</script>
	</div>
</div>