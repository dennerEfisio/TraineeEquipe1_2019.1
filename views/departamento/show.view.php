<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<body>
	<div class="container contCardEspecificoDepartamento">
		<div class="cardEspecificoDepartamento">
			<li class="list-group-item">
				<h5 class="card-title tituloCardDepartamento"><?= $departamentos->nome; ?></h5>
			</li>
			<li class="list-group-item">Nome: <?= $departamentos->nome; ?></li>
			<div class="card-buttons">
				<a href="/departamento/edit?id=<?= $departamentos->id; ?>"><button type="submit" class="btn btn-outline-primary">Editar</button></a>
				<button type="submit" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalBotaoDeletarEspecificoDepartamento">Deletar</button>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalBotaoDeletarEspecificoDepartamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja deletar esse projeto?</h5>
					<button type="submit" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Ao deletar esse projeto não será possível recuperá-lo!
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<form action="/departamento/delete" method="POST">
						<input type="hidden" name="id" value="<?= $departamentos->id; ?>">
						<button type="submit" class="btn btn-danger">Deletar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php require('views/partials/footer.php'); ?>