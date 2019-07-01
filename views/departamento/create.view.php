<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<body>
	<div class="container">
		<h1 class="tituloDepartamento">Criar departamento</h1>
		<form class="formDepartamento" method="POST" action="/departamento/store">
			<div class="form-group nomeCriarDepartamento">
				<label>Nome:</label>
				<input type="text" class="form-control" placeholder="Nome do departamento" name="nome" required>
			</div>
			<button type="submit" class="btn btn-outline-primary" name="criarDepartamento">Criar</button>
			<a href="/departamento/index"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
		</form>

	</div>

	<?php require('views/partials/footer.php'); ?>