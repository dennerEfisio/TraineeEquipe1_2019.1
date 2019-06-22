<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<p class="intro">Editar cliente</p>

<div class="container editando-cliente">
    <form class="form-row d-flex justify-content-center parte1" method="POST" action="/cliente/update">
        <div class="form-group col-12 col-md-6  formulario-cliente">
            <label for="nomecliente">Nome</label>
            <input type="text" class="form-control" value="<?= $cliente->nome; ?>" name="nome" required>
        </div>
        <div class="form-group col-12 col-md-6 formulario-cliente">
            <label for="sobrenomecliente">Sobrenome</label>
            <input type="text" class="form-control" value="<?= $cliente->sobrenome; ?>" name="sobrenome" required>
        </div>
        <div class="form-group col-12 col-md-6  formulario-cliente">
            <label for="cpfcliente">CPF</label>
            <input type="text" class="form-control" value="<?= $cliente->cpf; ?>" name="cpf" required>
        </div>
        <div class="form-group col-12 col-md-6  formulario-cliente">
            <label for="emailcliente">Email</label>
            <input type="email" class="form-control" value="<?= $cliente->email; ?>" name="email" required>
        </div>
        <div class="form-group col-12 col-md-6  formulario-cliente">
            <label for="cidadecliente">Cidade</label>
            <input type="text" class="form-control" value="<?= $cliente->cidade; ?>" name="cidade">
        </div>
        <div class="form-group col-12 col-md-6  formulario-cliente">
            <label for="bairrocliente">Bairro</label>
            <input type="text" class="form-control" value="<?= $cliente->bairro; ?>" name="bairro">
        </div>
        <div class="form-group col-12 col-md-6  formulario-cliente">
            <label for="ruacliente">Rua</label>
            <input type="text" class="form-control" value="<?= $cliente->rua; ?>" name="rua">
        </div>
        <div class="form-group col-12 col-md-6  formulario-cliente">
            <label for="numerocliente">Número</label>
            <input type="text" class="form-control" value="<?= $cliente->numero; ?>" name="numero">
        </div>
        <div class="form-group col-12 col-md-6  formulario-cliente">
            <label for="complementocliente">Complemento</label>
            <input type="text" class="form-control" value="<?= $cliente->anotacoes; ?>" name="complemento">
        </div>
        <div class="form-group col-12 col-md-6  formulario-cliente">
            <label for="tipocliente">Tipo</label>
            <select class="form-control" name="tipo_id">
                <?php foreach ($tipos as $tipo) : ?>
                    <option value="<?= $tipo->id; ?>"><?= $tipo->nome; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group col-12 formulario-cliente">
            <label for="anotacoes">Anotações</label>
            <textarea class="form-control" name="anotacoes" rows="3"><?= $cliente->anotacoes; ?></textarea>
        </div>
        <input type="hidden" name="id" value="<?= $cliente->id; ?>">
        <div>
            <a href="/cliente/index"><button type="button" class="btn btn-outline-dark">Voltar</button></a>
            <button type="submit" class="btn btn-outline-primary">Editar</button>
        </div>
    </form>

    <?php require('views/partials/footer.php'); ?>