<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">

	<title>Lista - Projetos</title>
</head>

<body>
	<?php require_once 'process.php'; ?>

	<?php
	if (isset($_SESSION['message'])) :
	?>

	<div class="alert alert-<?=$_SESSION['msg_type']?>">
	<?php echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
	</div>

	<?php endif ?>

	<?php
	// conecta ao banco de dados
	$mysqli = new mysqli('localhost', 'root', '', 'codigosenior') or die(mysqli_error($mysqli));

	// seleciona todos do banco
	$result = $mysqli->query("SELECT * FROM projeto") or die($mysqli->error);
	?>

	<div class="container contTableListagemProjeto">
		<h1 class="tituloProjeto">Lista de Projetos</h1>
		<div class="tableButton">
			<a href="criar-projetos.php" class="btn btn-outline-primary" role="button">Novo</a>
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
				<?php
				while ($row = $result->fetch_assoc()) :
					?>
					<tr>
						<td scope="row"><?= $row['id']; ?></td>
						<td><?= $row['nome']; ?></td>
						<td><a href="especifico.php?edit=<?= $row['id'] ?>" id="VerMaisEspecifico">Ver mais</a></td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>