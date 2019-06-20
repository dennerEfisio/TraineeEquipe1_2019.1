<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<p class="intro">Editar Usuário</p>

<div class="container editando-cliente">
    <form class="form-row d-flex justify-content-center parte1" method="POST" action="/usuario/update">
        <div class="form-group col-12 col-md-6  formulario-cliente">
            <label for="nomecliente">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?= $usuario->nome; ?>">
        </div>
        <div class="form-group col-12 col-md-6 formulario-cliente">
            <label for="emailcliente">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $usuario->email; ?>">
        </div>
        <div class="form-group col-12 col-md-6 formulario-cliente">
            <label for="emailcliente">Senha</label>
            <input type="password" class="form-control" name="senha" value="<?= $usuario->senha; ?>">
        </div>
        <div class="form-group col-12 col-md-6 formulario-cliente">
            <label for="tipocliente">Cargo</label>
            <select class="form-control" name="cargo_id">
                <?php foreach ($cargos as $cargo) : ?>
                    <option value="<?= $cargo->id; ?>"><?= $cargo->nome ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="hidden" name="id" value="<?= $usuario->id; ?>">
        <button type="button" class="btn btn-outline-dark btn-block col-12 botao-criar-cliente">Voltar</button>
        <button type="submit" class="btn btn-outline-primary btn-block col-12 botao-criar-cliente">Editar</button>
    </form>
</div>

<?php require('views/partials/footer.php'); ?>