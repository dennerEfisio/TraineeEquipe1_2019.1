<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<div class="container">
	<h1 class="tituloTipo">Criar tipo</h1>
	<form class="formTipo" method="POST" action="/tipo/store">
		<div class="form-group nomeCriarTipo">
			<label>Nome:</label>
			<input type="text" class="form-control" placeholder="Nome do tipo" name="nome" required>
		</div>
		<button type="submit" class="btn btn-outline-primary" name="criartipo">Criar</button>
		<a href="/tipo/index"><button type="button" class="btn btn-outline-danger">Cancelar</button>
	</form>

</div>

<?php require('views/partials/footer.php'); ?>