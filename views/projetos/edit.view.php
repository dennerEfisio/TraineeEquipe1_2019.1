<?php require ('views/partials/header.php'); ?>

	<!-- FIM DA NAVBAR, COMEÇO DO CODIGO ESPECIFICO DA PAGINA -->

	<div class="container">
		<h1 class="tituloProjeto">Editar Projeto</h1>
		<form class="formProjeto" method="POST"	action="update">
			<div class="form-group nomeEditar">
				<label>Nome:</label>
				<input type="text" class="form-control" name="nome" value="<?= $projeto->nome; ?>" required>
			</div>
			<div class="form-group descricaoEditar">
				<label>Descrição do Projeto:</label>
				<textarea class="form-control" name="descricao" rows="3" required><?= $projeto->descricao; ?></textarea>
			</div>
			<a href="update"><button type="submit" class="btn btn-outline-primary">Editar</button></a>
			<button type="submit" class="btn btn-outline-danger">Cancelar</button>
		</form>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
</body>

</html>