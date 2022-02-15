<main>
	<section id="faleconosco" class="container">
		<div class="card ">
			<div class="card-header">
				<h1 class="d-flex justify-content-center font-josefin">FALE CONOSCO</h1>
			</div>
			<div class="card-body">
				<form>
					<div class="form-group">
						<label for="nome" class="font-indie">Nome:</label>
						<input type="text" class="form-control" name="nome" maxlength="25">
					</div>
					<div class="form-group">
						<label for="tel" class="font-indie">Telefone:</label>
						<input type="text" class="form-control" name="tel" maxlength="15">
					</div>
					<div class="form-group">
						<label for="mail" class="font-indie">E-Mail:</label>
						<input type="text" class="form-control" name="mail" maxlength="100">
					</div>
					<div class="form-group">
						<label for="msg" class="font-indie">Mensagem:</label>
						<textarea class="form-control" rows="5" name="msg" maxlength="1000"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
				<div id="mensagem" class="mt-3"></div>
			</div>
		</div>
	</section>
</main>