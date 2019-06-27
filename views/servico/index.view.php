<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<div class="container contTableListagemServiço">
	<h1 class="tituloServiço">Lista de Serviços</h1>
	<div class="tableButton">
		<a href="/servico/create"><button type="submit" class="btn btn-outline-primary">Novo</button></a>
	</div>
	<table class="table table-hover table-bordered tableListagem">
		<thead>
			<tr>
				<td scope="col">#</td>
				<td scope="col">Nome</td>
				<td scope="col">Cliente</td>
				<td scope="col">Detalhes </td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($servicos as $servico) : ?>
				<tr>
					<td scope="row"><?= $servico->id ?></td>
					<td><?= $servico->nome ?></td>
					<?php foreach ($clientes as $cliente) : ?>
						<?php if ($servico->cliente_id == $cliente->id) : ?>
							<td><?= $cliente->nome ?></td>
						<?php endif ?>
					<?php endforeach; ?>
					<td><a href="/servico/show?id=<?= $servico->id; ?>">Ver mais</a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<?php require('views/partials/footer.php'); ?>