<?php require('views/partials/header.php'); ?>

<!-- FIM DA NAVBAR, COMEÇO DO CODIGO ESPECIFICO DA PAGINA -->

<div class="container contTableListagemProjeto">
	<h1 class="tituloProjeto">Lista de Projetos</h1>
	<div class="tableButton">
		<a href="create"><button type="button" class="btn btn-outline-primary">Novo</button></a>
	</div>
	<table class="table table-hover table-bordered contTableListagemProjeto">
		<thead>
			<tr>
				<td scope="col">#</td>
				<td scope="col">Nome</td>
				<td scope="col">Detalhes</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($projetos as $projeto) : ?>
				<tr>
					<td scope="row"><?= $projeto->id; ?></td>
					<td><?= $projeto->nome; ?></td>
					<td><a href="show?id=<?= $projeto->id; ?>">Ver mais</a></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
<?php require('views/partials/header.php'); ?>