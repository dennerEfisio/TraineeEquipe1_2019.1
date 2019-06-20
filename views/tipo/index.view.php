<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<div class="container contTableListagemTipo">
	<h1 class="tituloTipo">Lista de Tipos</h1>
	<div class="tableButton">
		<a href="/tipo/create"><button type="submit" class="btn btn-outline-primary">Novo</button></a>
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
			<?php foreach ($tipos as $tipo) : ?>
				<tr>
					<td scope="row"><?= $tipo->id; ?></td>
					<td><?= $tipo->nome; ?></td>
					<td><a href="/tipo/show?id=<?= $tipo->id; ?>">Ver mais</a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<?php require('views/partials/footer.php'); ?>