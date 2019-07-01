<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<body>
	<div class="container contCardEspecificoTipo">
		<div class="cardEspecificoTipo">
			<li class="list-group-item">
				<h5 class="card-title tituloCardTipo">Tipo:</h5>
			</li>
			<li class="list-group-item">Nome: <?= $tipos->nome; ?></li>
			<div class="card-buttons">
				<a href="/tipo/edit?id=<?= $tipos->id; ?>"><button type="submit" class="btn btn-outline-primary">Editar</button></a>
				<button type="submit" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalBotaoDeletarEspecificoTipo">Deletar</button>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalBotaoDeletarEspecificoTipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
					<form action="/tipo/delete" method="POST">
						<input type="hidden" name="id" value="<?= $tipos->id; ?>">
						<button type="submit" class="btn btn-danger">Deletar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php require('views/partials/footer.php'); ?>