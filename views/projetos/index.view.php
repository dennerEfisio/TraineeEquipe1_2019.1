<?php require ('views/partials/header.php'); ?>
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
				<?php foreach($projetos as $projetos) : ?>
				<tr>
					<td scope="row"><?= $projetos->id; ?></td>
					<td><?=$projetos->nome; ?></td>
					<td><a href="show">Ver mais</a></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
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