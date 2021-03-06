<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<body>
    <p class="intro">Criar usuário</p>

    <div class="container criando-cliente">
        <form class="form-row d-flex justify-content-center parte1" method="POST" action="/usuario/store">
            <div class="form-group col-12   formulario-cliente">
                <label for="nomecliente">Nome</label>
                <input type="text" class="form-control" placeholder="Nome" name="nome" required>
            </div>
            <div class="form-group col-12   formulario-cliente">
                <label for="emailcliente">Email</label>
                <input type="email" class="form-control" placeholder="Ex: Denner@codejr.com.br" name="email" required>
            </div>
            <div class="form-group col-12   formulario-cliente">
                <label for="emailcliente">Senha</label>
                <input type="password" class="form-control" placeholder="Ex: lku234r4zs23" name="senha" required>
            </div>
            <div class="form-group col-12   formulario-cliente">
                <label for="cargocliente">cargo</label>
                <select class="form-control" name="cargo_id">
                    <option>Selecionar o cargo</option>
                    <?php foreach ($cargos as $cargo) : ?>
                        <option value="<?= $cargo->id; ?>"><?= $cargo->nome ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group escolhendo-imagem col-12">
                <label for="exampleFormControlFile1 ">Inserir foto</label>
                <input type="file" class="form-control-file" name="url_imagem" accept="image/x-png,image/gif,image/jpeg" required>
            </div>
            <div>
                <a href="/usuario/index"><button type="button" class="btn btn-outline-dark"> Voltar</button></a>
                <button type="submit" class="btn btn-outline-primary"> Criar </button>
            </div>
        </form>
    </div>
    <?php require('views/partials/footer.php'); ?>