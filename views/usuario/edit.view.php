<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<p class="intro">Editar Usuário</p>

<div class="container editando-cliente">
    <form class="form-row d-flex justify-content-center parte1" method="POST" action="/usuario/update">
        <div class="form-group col-12  formulario-cliente">
            <label for="nomecliente">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?= $usuario->nome; ?>">
        </div>
        <div class="form-group col-12 formulario-cliente">
            <label for="emailcliente">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $usuario->email; ?>">
        </div>
        <div class="form-group col-12 formulario-cliente">
            <label for="emailcliente">Cofirme a senha</label>
            <input type="password" class="form-control" name="ConfirmaSenha">
        </div>
        <div class="form-group col-12 formulario-cliente">
            <label for="emailcliente">Nova senha</label>
            <input type="password" class="form-control" name="senha">
        </div>
        <div class="form-group col-12 formulario-cliente">
            <label for="tipocliente">Cargo</label>
            <select class="form-control" name="cargo_id">
                <?php foreach ($cargos as $cargo) : ?>
                    <option value="<?= $cargo->id; ?>"><?= $cargo->nome ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group escolhendo-imagem col-12 ">
            <label for="exampleFormControlFile1 ">Inserir foto</label>
            <input type="file" class="form-control-file" name="url_imagem" accept="image/x-png,image/gif,image/jpeg">
        </div>
        <input type="hidden" name="id" value="<?= $usuario->id; ?>">
        <div class="botaoEditUsuario">
            <a href="/usuario/index"><button type="button" class="btn btn-outline-dark">Voltar</button></a>
            <button type="submit" class="btn btn-outline-primary">Editar</button>
        </div>
    </form>
</div>

<?php require('views/partials/footer.php'); ?>