<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<p class="intro">Cliente <?= $cliente->nome; ?></p>

<div class="container">

    <div class="jumbotron">
        <div class="container for-about">
            <p class="lead">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action cliente-item-vermais">Nome: <?= $cliente->nome; ?></a>
                    <a class="list-group-item list-group-item-action cliente-item-vermais">Sobrenome: <?= $cliente->sobrenome; ?></a>
                    <a class="list-group-item list-group-item-action cliente-item-vermais">CPF: <?= $cliente->cpf; ?></a>
                    <a class="list-group-item list-group-item-action cliente-item-vermais">Email: <?= $cliente->email; ?></a>
                    <a class="list-group-item list-group-item-action cliente-item-vermais">Cidade: <?= $cliente->cidade; ?></a>
                    <a class="list-group-item list-group-item-action cliente-item-vermais">Bairro: <?= $cliente->bairro; ?></a>
                    <a class="list-group-item list-group-item-action cliente-item-vermais">Rua: <?= $cliente->rua; ?></a>
                    <a class="list-group-item list-group-item-action cliente-item-vermais">Número: <?= $cliente->numero; ?></a>
                    <a class="list-group-item list-group-item-action cliente-item-vermais">Complemento: <?= $cliente->complemento; ?></a>
                    <a class="list-group-item list-group-item-action cliente-item-vermais">Anotações: <?= $cliente->anotacoes; ?></a>
                    <a class="list-group-item list-group-item-action cliente-item-vermais">Tipo: <?= $tipo->nome; ?></a>
                </div>
        </div>
        </p>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalDeletar">
            Deletar
        </button>

        <a href="/cliente/edit?id=<?= $cliente->id; ?>"><button type="button" class="btn btn-outline-primary">Editar</button></a>

        <!-- Modal -->
        <div class="modal fade" id="modalDeletar" tabindex="-1" role="dialog" aria-labelledby="modalConfirmar" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalConfirmar">Tem certeza que deseja deletar esse cliente?
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Ao deletar esse cliente não será possível recuperá-lo!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                        <form action="/cliente/delete" method="POST">
                            <input type="hidden" name="id" value="<?= $cliente->id; ?>">
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<?php require('views/partials/footer.php'); ?>