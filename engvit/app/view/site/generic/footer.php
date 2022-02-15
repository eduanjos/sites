<footer class="container-fluid pt-2 bg-dark" style="margin-bottom: 0!important;">
	<p class="text-center text-white">NOME-DA-EMPRESA - CNPJ: 00.000.000/0000-00 ©Todos os direitos reservados. <span id="ano" style="margin-bottom: 0!important;"></span></p>
	<p class="text-secondary text-center">
		<small>Desenvolvido por <a href="https://epcriacao.com.br" target="_blank"><strong>EP CRIAÇÃO</strong></a></small>
	</p>
</footer>
<script>
	var year = new Date().getFullYear();
	var span = document.querySelector("#ano");
	span.append(year);
</script>