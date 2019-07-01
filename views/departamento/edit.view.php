<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<body>
	<div class="container">
		<h1 class="tituloDepartamento">Editar Departamento</h1>
		<form class="formDepartamento" method="POST" action="/departamento/update">
			<div class="form-group nomeEditarDepartamento">
				<label>Nome:</label>
				<input type="text" class="form-control" name="nome" value="<?= $departamentos->nome; ?>" required>
			</div>
			<input type="hidden" name="id" value="<?= $departamentos->id; ?>">
			<a href="/departamento/update"><button type="submit" class="btn btn-outline-primary" name="EditarDepartamento">Editar</button></a>
			<a href="/departamento/index"><button type="submit" class="btn btn-outline-danger" id="Cancelar">Cancelar</button></a>
		</form>
	</div>

	<?php require('views/partials/footer.php'); ?>