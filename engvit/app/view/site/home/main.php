<main>
	<section id="home" class="carousel slide" data-ride="carousel" data-pause="false">
		<ul class="carousel-indicators">
			<li data-target="#home" data-slide-to="0" class="active"></li>
			<li data-target="#home" data-slide-to="1"></li>
		</ul>
		<div class="carousel-inner d-flex">
			<div id="slide-1" class="carousel-item active">
				<div class="carousel-caption">
					<h1 class="Ebrima wow zoomIn" data-wow-duration="1s">ENG<span>VIT</span> - CONSTRUÇÕES</h1>
					<h2 class="CenturyGothic wow bounceInUp" data-wow-duration="1s">A solução a altura que você precisa</h2>
				</div>
			</div>
			<div id="slide-2" class="carousel-item">
				<div class="carousel-caption">
					<h1 class="Ebrima wow zoomIn" data-wow-duration="1s">ENG<span>VIT</span> - CONSTRUÇÕES</h1>
					<h2 class="CenturyGothic wow bounceInUp" data-wow-duration="1s">A solução a altura que você precisa</h2>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#home" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#home" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</section>
	<section id="sobre" class="container text-center pt-5 mt-5 pb-5">
		<h1 class="Ebrima wow zoomIn" data-wow-duration="1s">SOBRE NÓS</h1>
		<p class="CenturyGothic pt-3 wow bounceInUp" data-wow-duration="1s">A Engvit é uma empresa da área de 
			construção Civil que atua desde 2001, na
			construção de edifícios e  é especializada 
		em execução de fachadas de prédios. </p>
		<button id="btnSobre" class="btn btn-lg btn-success mt-5 wow zoomIn" data-wow-duration="1s" role="button">Saiba Mais</button>
		<div id="noneSobre" style="display: none;" role="contentinfo">

			<p class="CenturyGothic pt-3 wow fadeIn" data-wow-duration="1s">Fazemos a gestão e a execução de todas as etapas do projeto, incluindo a regularização dele, junto a prefeitura, ao CREA e aos demais órgão competentes.
			Contamos com uma equipe de profissionais qualificados, mantendo sempre a qualidade, transparência e o respeito ao meio ambiente.</p>

			<h2 class="wow fadeIn" data-wow-duration="1s">MISSÃO</h2>
			<p class="CenturyGothic pt-3 wow fadeIn" data-wow-duration="1s">Oferecer soluções diferenciadas em construção civil, atender de forma clara e objetiva as necessidades dos clientes no que se refere a prazo, qualidade e atendimento, oferecendo o que há de melhor em tecnologia disponível no mercado.</p>

			<h2 class="wow fadeIn" data-wow-duration="1s">VISÃO</h2>
			<p class="CenturyGothic pt-3 wow fadeIn" data-wow-duration="1s">Ser reconhecida como uma empresa referência em sua área de atuação, pela excelência dos serviços prestados, pela transparência e comprometimento com sua equipe e clientes.</p>

			<h2 class="wow fadeIn" data-wow-duration="1s">VALORES</h2>
			<p class="CenturyGothic pt-3 wow fadeIn" data-wow-duration="1s">Prestar serviços com clareza e honestidade, buscando satisfazer as necessidades do cliente com determinação, integridade, respeito e comprometimento.</p>

		</div>
	</section>
	<section id="servicos" class="container-fluid pt-5 mt-5 pb-5">
		<h1 class="Ebrima text-center text-white pt-5 wow zoomIn" data-wow-duration="1s">SERVIÇOS</h1>
		<div class="row pt-5 mt-3">
			<div class="col-md-6">
				<div class="d-flex justify-content-center mb-5">
					<figure>
						<img class="img-fluid wow fadeIn" data-wow-duration="1s" src="<?=DIRIMG.'site/engenheiros.png'?>" alt="Ilustração de Engenheiros" title="Engenheiros">
					</figure>
				</div>
			</div>
			<div class="col-md-6 d-flex justify-content-center">
				<div>
					<div class="wow fadeIn" data-wow-duration="1s">
						<figure>
							<img class="img-fluid" src="<?=DIRIMG.'site/icon-reparacao.png'?>" alt="Ícone Reparação de Fachada" title="Reparação de Fachada">
						</figure>
						<span class="CenturyGothic">Reparação de Fachada</span>
					</div>
					<div class="mt-5 wow fadeIn" data-wow-duration="1s">
						<figure>
							<img class="img-fluid" src="<?=DIRIMG.'site/icon-inspecao.png'?>" alt="Ícone Inspeção de Fachada" title="Inspeção de Fachada">
						</figure>
						<span class="CenturyGothic">Inspeção de Fachada</span>
					</div>
					<div class="mt-5 wow fadeIn" data-wow-duration="1s">
						<figure>
							<img class="img-fluid" src="<?=DIRIMG.'site/icon-impermeabilizacao.png'?>" alt="Ícone Impermeabilizações" title="Impermeabilizações">
						</figure>
						<span class="CenturyGothic">Impermeabilizações</span>
					</div>
					<div class="mt-5 wow fadeIn" data-wow-duration="1s">
						<figure>
							<img class="img-fluid" src="<?=DIRIMG.'site/icon-reforma.png'?>" alt="Ícone Reforma Geral" title="Reforma Geral">
						</figure>
						<span class="CenturyGothic">Reforma Geral</span>
					</div>
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-center mt-5 mb-5">
			<button id="btnSolucoes" class="btn btn-lg btn-success wow zoomIn" data-wow-duration="1s" role="button">Outras Soluções</button>
		</div>
		<div id="noneServicos" style="display: none;">
			<div class="row">
				<div class="col-md"></div>
				<div class="col-md-6" style="border: 1px solid #A7CE45!important;border-radius: 4px;margin: 0px 5px 0px 5px;">
					<div class="wow fadeIn pt-2" data-wow-duration="1s">
						<i class='far fa-check-square' style='font-size:36px'></i>
						<span class="CenturyGothic">Manutenção de fachada de prédios</span>
					</div>
					<div class="wow fadeIn pt-2" data-wow-duration="1s">
						<i class='far fa-check-square' style='font-size:36px'></i>
						<span class="CenturyGothic">Serviço de esquadrias de alumínio</span>
					</div>
					<div class="wow fadeIn pt-2" data-wow-duration="1s">
						<i class='far fa-check-square' style='font-size:36px'></i>
						<span class="CenturyGothic">Serviço de ACM</span>
					</div>
					<div class="wow fadeIn pt-2" data-wow-duration="1s">
						<i class='far fa-check-square' style='font-size:36px'></i>
						<span class="CenturyGothic">Obras em estruturas de pré-moldados</span>
					</div>
					<div class="wow fadeIn pt-2" data-wow-duration="1s">
						<i class='far fa-check-square' style='font-size:36px'></i>
						<span class="CenturyGothic">Serviço de sistema Drywall (gesso acartonado)</span>
					</div>
					<div class="wow fadeIn pt-2" data-wow-duration="1s">
						<i class='far fa-check-square' style='font-size:36px'></i>
						<span class="CenturyGothic">Instalação de Pisos e forros em geral</span>
					</div>
					<div class="wow fadeIn pt-2" data-wow-duration="1s">
						<i class='far fa-check-square' style='font-size:36px'></i>
						<span class="CenturyGothic">Serviços de Hidráulica</span>
					</div>
					<div class="wow fadeIn pt-2" data-wow-duration="1s">
						<i class='far fa-check-square' style='font-size:36px'></i>
						<span class="CenturyGothic">Serviços de Instalações Elétricas</span>
					</div>
					<div class="wow fadeIn pt-2" data-wow-duration="1s">
						<i class='far fa-check-square' style='font-size:36px'></i>
						<span class="CenturyGothic">Serviço de instalação e fornecimento de vidros</span>
					</div>
					<div class="wow fadeIn pt-2" data-wow-duration="1s">
						<i class='far fa-check-square' style='font-size:36px'></i>
						<span class="CenturyGothic">Serviço de rede de prevenção de incêndio, para-raios, porta corta fogo e corrimões</span>
					</div>
					<div class="wow fadeIn pt-2" data-wow-duration="1s">
						<i class='far fa-check-square' style='font-size:36px'></i>
						<span class="CenturyGothic">Serviços metalúrgicos (mezaninos, coberturas e estruturas metálicas)</span>
					</div>
					<div class="wow fadeIn pt-2 pb-3" data-wow-duration="1s">
						<i class='far fa-check-square' style='font-size:36px'></i>
						<span class="CenturyGothic">Construção da base ao acabamento, reformas e reparos em geral</span>
					</div>
				</div>
				<div class="col-md"></div>
			</div>
		</div>
	</section>
	<section id="portfolio"  class="container pt-5 mt-5 pb-5">
		<h1 class="Ebrima text-center wow zoomIn" data-wow-duration="1s">EQUIPE EM AÇÃO!</h1>
		<h2 class="CenturyGothic pt-3 text-center wow fadeIn" data-wow-duration="1s">Conheça um pouco do nosso portfólio.</h2>
		<div class="row">
			<div class="col-sm">
				<div class="d-flex justify-content-center mt-3">
					<img class="img-thumbnail" src="<?=DIRIMG.'site/thumbnail-1.png'?>" alt="Portfólio - Engvit">
				</div>
			</div>
			<div class="col-sm">
				<div class="d-flex justify-content-center mt-3">
					<img class="img-thumbnail" src="<?=DIRIMG.'site/thumbnail-2.png'?>" alt="Portfólio - Engvit">
				</div>
			</div>
			<div class="col-sm">
				<div class="d-flex justify-content-center mt-3">
					<img class="img-thumbnail" src="<?=DIRIMG.'site/thumbnail-3.png'?>" alt="Portfólio - Engvit">
				</div>
			</div>
			<div class="col-sm">
				<div class="d-flex justify-content-center mt-3">
					<img class="img-thumbnail" src="<?=DIRIMG.'site/thumbnail-4.png'?>" alt="Portfólio - Engvit">
				</div>
			</div>
		</div>
	</section>
	<section id="contato"  class="container-fluid pt-5 mt-5 pb-5">
		<h1 class="Ebrima pt-5 text-center wow zoomIn" data-wow-duration="1s">FALE CONOSCO</h1>
		<div class="row pt-5">
			<div class="col-md-1">
			</div>
			<div class="col-md-5">
				<div class="wow bounceInLeft" data-wow-duration="1s">
					<i class="material-icons animated infinite pulse">location_on</i>
					<span class="CenturyGothic">Novo Horizonte, Serra - ES</span>
				</div>
				<div class="mt-2 wow bounceInLeft" data-wow-duration="1s">
					<i class="material-icons animated infinite pulse">phone</i>
					<span class="CenturyGothic">(27) 99999-3331</span>
				</div>
				<div class="mt-2 pb-5 wow bounceInLeft" data-wow-duration="1s">
					<i class="fa-solid fa-clock-eight animated infinite pulse"></i>
					<span class="pl-2 CenturyGothic">Das 9h às 18h</span>
				</div>
			</div>
			<div class="col-md-5">
				<form class="faleconosco wow fadeIn" data-wow-duration="1s">
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" class="form-control" id="nome" name="nome">
					</div>
					<div class="form-group">
						<label for="fone">Telefone:</label>
						<input type="fone" class="form-control" id="fone" name="fone">
					</div>
					<div class="form-group">
						<label for="email">E-mail:</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="msg">Mensagem:</label>
						<textarea class="form-control" rows="5" id="msg" name="msg" maxlength="100"></textarea>
					</div>
					<button type="submit" class="btnEnviar btn btn-lg btn-success" role="button">Enviar</button>
				</form>
				<div class="msg"></div>
			</div>
		</div>
	</section>
</main>