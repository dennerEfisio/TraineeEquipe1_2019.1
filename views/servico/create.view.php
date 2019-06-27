<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<h1 class="tituloServiço">Criar Serviço</h1>

<div class="container">
	<form class="formServiço" method="POST" action="/servico/store">
		<div class="form-group nomeCriarServiço">
			<label>Nome:</label>
			<input type="text" class="form-control" placeholder="Nome do Serviço" name="nome" required>
		</div>
		<div class="form-group preçoCriarServiço">
			<label>Preço:</label>
			<input type="number" step="0.01" class="form-control" placeholder="Valor do Serviço" name="preco" required>
		</div>
		<div class="form-group descontoCriarServiço">
			<label>Desconto em %:</label>
			<input type="number" class="form-control" placeholder="Valor do desconto" name="desconto">
		</div>
		<div class="form-group anotaçãoCriarServiço">
			<label>Anotações sobre o serviço:</label>
			<textarea class="form-control" name="anotacoes" rows="3"></textarea>
		</div>
		<div class="form-group clienteCriarServiço">
			<label for="inputState">Cliente:</label>
			<select id="inputState" class="form-control" name="cliente_id" required>
				<?php foreach ($clientes as $cliente) : ?>
					<option value="<?= $cliente->id; ?>"><?= $cliente->nome ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group produtoCriarServiço">
			<label for="inputState ">Produto : </label>
			<select id="inputState" class="form-control" name="produto_id" require d>
				<?php foreach ($projetos as $projeto) : ?>
					<option value="<?= $projeto->id; ?>"><?= $projeto->nome ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group usuarioCriarServiço">
			<label for="inputState">Usuário:</label>
			<select id="inputState" class="form-control" name="usuario_id" required>
				<?php foreach ($usuarios as $usuario) : ?>
					<option value="<?= $usuario->id; ?>"><?= $usuario->nome ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<button type="submit" class="btn btn-outline-primary">Criar</button>
		<a href="/servico/index"><button type="button" class="btn btn-outline-danger">Cancelar</button></a>
	</form>
</div>

<?php require('views/partials/footer.php'); ?>