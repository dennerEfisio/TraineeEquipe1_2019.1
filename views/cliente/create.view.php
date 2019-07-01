<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<body>
    <p class="intro">Criar cliente</p>

    <div class="container criando-cliente">
        <form class="form-row d-flex justify-content-center parte1" method="POST" action="/cliente/store">
            <div class="form-group col-12 col-md-6  formulario-cliente">
                <label for="nomecliente">Nome</label>
                <input type="text" class="form-control" placeholder="Nome" name="nome" required>
            </div>
            <div class="form-group col-12 col-md-6 formulario-cliente">
                <label for="sobrenomecliente">Sobrenome</label>
                <input type="text" class="form-control" placeholder="Sobrenome" name="sobrenome" required>
            </div>
            <div class="form-group col-12 col-md-6  formulario-cliente">
                <label for="cpfcliente">CPF</label>
                <input type="text" class="form-control" placeholder="XXX.XXX.XXX-XX" name="cpf" required>
            </div>
            <div class="form-group col-12 col-md-6  formulario-cliente">
                <label for="emailcliente">Email</label>
                <input type="email" class="form-control" placeholder="Ex: gabriel@codejr.com.br" name="email" required>
            </div>
            <div class="form-group col-12 col-md-6  formulario-cliente">
                <label for="cidadecliente">Cidade</label>
                <input type="text" class="form-control" placeholder="Ex: São Paulo" name="cidade">
            </div>
            <div class="form-group col-12 col-md-6  formulario-cliente">
                <label for="bairrocliente">Bairro</label>
                <input type="text" class="form-control" placeholder="Ex: Morro da Penha" name="bairro">
            </div>
            <div class="form-group col-12 col-md-6  formulario-cliente">
                <label for="ruacliente">Rua</label>
                <input type="text" class="form-control" placeholder="Ex: Cruzeiro" name="rua">
            </div>
            <div class="form-group col-12 col-md-6  formulario-cliente">
                <label for="numerocliente">Número</label>
                <input type="text" class="form-control" placeholder="Ex: 47" name="numero">
            </div>
            <div class="form-group col-12 col-md-6  formulario-cliente">
                <label for="complementocliente">Complemento</label>
                <input type="text" class="form-control" placeholder="Perto do parque" name="complemento">
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
                <textarea class="form-control" name="anotacoes" rows="3"></textarea>
            </div>
            <div>
                <a href="/cliente/index"><button type="button" class="btn btn-outline-dark">Voltar</button></a>
                <button type="submit" class="btn btn-outline-primary">Criar</button>
            </div>
        </form>
    </div>

    <?php require('views/partials/footer.php'); ?>