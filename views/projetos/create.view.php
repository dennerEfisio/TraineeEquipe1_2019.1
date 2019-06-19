<?php require('views/partials/header.php'); ?>

<!-- FIM DA NAVBAR, COMEÇO DO CODIGO ESPECIFICO DA PAGINA -->

<div class="container">
	<h1 class="tituloProjeto">Criar Projeto</h1>
	<form class="formProjeto" method="POST" action="/projeto/store">
		<div class="form-group nomeCriar">
			<label>Nome:</label>
			<input type="text" class="form-control" placeholder="Nome do Projeto" name="nome" required>
		</div>
		<div class="form-group descricaoCriar">
			<label>Descrição do Projeto:</label>
			<textarea class="form-control" rows="3" name="descricao" required></textarea>
		</div>
		<button type="submit" class="btn btn-outline-primary">Criar</button>
		<a href="/projeto/index"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
	</form>

</div>

<?php require('views/partials/footer.php'); ?>