<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<div class="container contCardEspecificoServiço">
	<div class="cardEspecificoServiço">
		<li class="list-group-item">
			<h5 class="card-title tituloCardServiço"><?= $servico->nome ?></h5>
		</li>
		<li class="list-group-item">Preço: <?= $servico->preco ?></li>
		<li class="list-group-item">Desconto: <?= $servico->desconto ?></li>
		<li class="list-group-item">Data: <?= $servico->data_venda ?></li>
		<li class="list-group-item">Cliente: <?= $cliente->nome ?></li>
		<li class="list-group-item">Produto: <?= $projeto->nome ?></li>
		<li class="list-group-item">Usuário: <?= $usuario->nome ?></li>
		<li class="list-group-item">
			<p class="card-text"><?= $servico->anotacoes ?></p>
		</li>
		<div class="card-buttons">
			<a href="/servico/edit?id=<?= $servico->id; ?>"><button type="submit" class="btn btn-outline-primary">Editar</button></a>
			<button type="submit" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalBotaoDeletarEspecificoServiço">Deletar</button>
		</div>
	</div>
</div>

<div class="modal fade" id="modalBotaoDeletarEspecificoServiço" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
				<form action="/servico/delete" method="POST">
					<input type="hidden" name="id" value=" <?= $servico->id; ?>">
					<button type="submit" class="btn btn-danger">Deletar</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php require('views/partials/footer.php'); ?>