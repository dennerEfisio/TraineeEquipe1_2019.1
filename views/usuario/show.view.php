<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<div class="container contCardEspecificoUsuario">
    <div class="cardEspecificoUsuario">
        <div class="card-body">
            <img src="<?= $usuario->url_imagem; ?>" class="card-img-top">
            <h5 class="card-title"><?= $usuario->nome; ?></h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?= $usuario->email; ?></li>
                <li class="list-group-item"><?= $usuario->cargo_id; ?></li>
            </ul>
        </div>
        <div class="cardButtonsUsuario">
            <a href="/Usuario/edit?id=<?= $usuario->id; ?>"><button type="submit" class="btn btn-outline-primary">Editar</button></a>
            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalDeletar"> Deletar </button>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalDeletar" tabindex="-1" role="dialog" aria-labelledby="modalConfirmar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalConfirmar">Tem certeza que deseja deletar esse usuário?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Ao deletar esse usuário não será possível recuperá-lo!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <form action="/usuario/delete" method="POST">
                    <input type="hidden" name="id" value=" <?= $usuario->id; ?>">
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require('views/partials/footer.php'); ?>