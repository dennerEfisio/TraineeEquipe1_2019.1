<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<div class="container contTableListagemDepartamento">
	<h1 class="tituloDepartamento">Lista de Departamentos</h1>
	<div class="tableButton">
		<a href="/departamento/create"><button type="submit" class="btn btn-outline-primary">Novo</button></a>
	</div>
	<table class="table table-hover table-bordered tableListagem">
		<thead>
			<tr>
				<td scope="col">#</td>
				<td scope="col">Nome</td>
				<td scope="col">Detalhes </td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($departamentos as $departamento) : ?>
				<tr>
					<td scope="row"><?= $departamento->id; ?></td>
					<td><?= $departamento->nome; ?></td>
					<td><a href="/departamento/show?id=<?= $departamento->id; ?>">Ver mais</a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<?php require('views/partials/footer.php'); ?>