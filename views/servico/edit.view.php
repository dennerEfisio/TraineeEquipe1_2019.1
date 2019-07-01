<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<body>
	<div class="container">
		<h1 class="tituloServiço">Editar Serviço</h1>
		<form class="formServiço" method="POST" action="/servico/update">
			<div class="form-group nomeEditarServiço">
				<label>Nome:</label>
				<input type="text" class="form-control" name="nome" value="<?= $servico->nome; ?>" required>
			</div>
			<div class="form-group preçoEditarServiço">
				<label>Preço:</label>
				<input type="number" step="0.01" class="form-control" name="preco" Value="<?= $servico->preco; ?>" required>
			</div>
			<div class="form-group descontoEditarServiço">
				<label>Desconto em %:</label>
				<input type="number" class="form-control" name="desconto" value="<?= $servico->desconto; ?>">
			</div>
			<div class="form-group anotaçãoEditarServiço">
				<label>Anotações sobre o serviço:</label>
				<textarea class="form-control" name="anotacoes" rows="3"><?= $servico->anotacoes; ?></textarea>
			</div>
			<div class="form-group clienteEditarServiço">
				<label for="inputState">Cliente:</label>
				<select id="inputState" name="cliente_id" class="form-control" required>
					<?php foreach ($clientes as $cliente) : ?>
						<option value="<?= $cliente->id; ?>"><?= $cliente->nome ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group produtoEditarServiço">
				<label for="inputState">Produto:</label>
				<select id="inputState" name="produto_id" class="form-control" required>
					<?php foreach ($projetos as $projeto) : ?>
						<option value="<?= $projeto->id; ?>"><?= $projeto->nome ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group usuarioEditarServiço">
				<label for="inputState">Usuário:</label>
				<select id="inputState" name="usuario_id" class="form-control" required>
					<?php foreach ($usuarios as $usuario) : ?>
						<option value="<?= $usuario->id; ?>"><?= $usuario->nome ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<input type="hidden" name="id" value="<?= $servico->id; ?>">
			<div>
				<button type="submit" class="btn btn-outline-primary">Editar</button>
				<a href="/servico/index"><button type="submit" class="btn btn-outline-danger">Cancelar</button></a>
			</div>
		</form>
	</div>

	<?php require('views/partials/footer.php'); ?>