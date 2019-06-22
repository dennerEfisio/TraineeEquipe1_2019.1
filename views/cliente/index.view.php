<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<p class="intro">Lista de clientes</p>


<div class="container contTableListagem">
	<div class="tableButton">
		<a href="/cliente/create"><button type="button" class="btn btn-outline-primary" id="botaoNovoProjetoLista">Novo</button></a>
	</div>
	<div class="table-responsive">
		<table class="table table-hover table-bordered tableListagem">
			<thead>
				<tr>
					<td scope="col">#</td>
					<td scope="col">Nome</td>
					<td scope="col">email</td>
					<td scope="col">Detalhes</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($clientes as $cliente) : ?>
					<tr>
						<td scope="row"><?= $cliente->id ?></td>
						<td><?= $cliente->nome ?></td>
						<td><?= $cliente->email ?></td>
						<td><a href="/cliente/show?id=<?= $cliente->id; ?>">Ver mais</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

<?php require('views/partials/footer.php'); ?>