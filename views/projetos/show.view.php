<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<div class="container contCardEspecificoProjeto">
	<div class="cardEspecificoProjeto">
		<div class="card-body">
			<h5 class="card-title">Nome: <?=$projetos->nome; ?></h5>
			<p class="card-text">
				Descrição: <?= $projetos->descricao; ?>
			</p>
		</div>
		<div class="cardButtonsProjeto">
			<a href="/projeto/edit?id=<?= $projetos->id; ?>"><button type="submit" class="btn btn-outline-primary">Editar</button></a>
			<button type="submit" class="btn btn-outline-danger" id="botaoDeletarProjetoEspecifico" data-toggle="modal" data-target="#modalBotaoDeletarEspecifico">Deletar</button>
		</div>
	</div>
</div>

<div class="modal fade" id="modalBotaoDeletarEspecifico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
				<form action="/projeto/delete" method="POST">
					<input type="hidden" name="id" value=" <?= $projetos->id; ?>">
					<button type="submit" class="btn btn-danger">Deletar</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php require('views/partials/footer.php'); ?>