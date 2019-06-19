<?php require('views/partials/header.php'); ?>

<!-- FIM DA NAVBAR, COMEÇO DO CODIGO ESPECIFICO DA PAGINA -->

<div class="container">
	<h1 class="tituloProjeto">Editar Projeto</h1>
	<form class="formProjeto" method="POST" action="update">
		<div class="form-group nomeEditar">
			<label>Nome:</label>
			<input type="text" class="form-control" name="nome" value="<?= $projetos->nome; ?>" required>
		</div>
		<div class="form-group descricaoEditar">
			<label>Descrição do Projeto:</label>
			<textarea class="form-control" name="descricao" rows="3" required><?= $projetos->descricao; ?></textarea>
		</div>
		<input type="hidden" name="id" value="<?= $projetos->id; ?>">
		<a href="update"><button type="submit" class="btn btn-outline-primary">Editar</button></a>
		<a href="index"><button type="submit" class="btn btn-outline-danger">Cancelar</button></a>
	</form>
</div>
<?php require('views/partials/header.php'); ?>