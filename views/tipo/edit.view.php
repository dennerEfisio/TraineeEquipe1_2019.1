<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<div class="container">
	<h1 class="tituloTipo">Editar Tipo</h1>
	<form class="formTipo" method="POST" action="/tipo/update">
		<div class="form-group nomeEditarTipo">
			<label>Nome:</label>
			<input type="text" class="form-control" name="nome" value="<?= $tipos->nome; ?>" required>
		</div>
		<input type="hidden" name="id" value="<?= $tipos->id; ?>">
		<a href="/tipo/update"><button type="submit" class="btn btn-outline-primary" name="EditarTipo">Editar</button>
			<a href="/tipo/index"><button type="submit" class="btn btn-outline-danger" id="Cancelar">Cancelar</button>
	</form>
</div>

<?php require('views/partials/footer.php'); ?>