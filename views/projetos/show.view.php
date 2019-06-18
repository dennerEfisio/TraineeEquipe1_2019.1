<?php require ('views/partials/header.php'); ?>
	<!-- FIM DA NAVBAR, COMEÇO DO CODIGO ESPECIFICO DA PAGINA -->

	<div class="container contCardEspecificoProjeto">
		<div class="cardEspecificoProjeto">
			<div class="card-body">
				<h5 class="card-title"><?= $projetos->nome; ?></h5>
				<p class="card-text">
					<?= $projetos->descricao; ?>
				</p>
			</div>
			<div class="cardButtonsProjeto">
				<a href="edit?id=<?= $projetos->id; ?>"><button type="submit" class="btn btn-outline-primary" id="botaoEditarProjetoEspecifico">Editar</button></a>
				<button type="submit" class="btn btn-outline-danger" id="botaoDeletarProjetoEspecifico" data-toggle="modal"
					data-target="#modalBotaoDeletarEspecifico">Deletar</button>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalBotaoDeletarEspecifico" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
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
					<form action="delete" method="POST" >
					<input type="hidden" name="id" value=" <?= $projetos->id; ?>">
					<button type="submit" class="btn btn-danger">Deletar</button>
					</form>
				</div>
			</div>
		</div>
	</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
</body>

</html>