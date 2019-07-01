<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<body>

    <div class="container contCardEspecificoCargo">
        <div class="cardEspecificoCargo">
            <div class="card-body">
                <h5 class="card-title">Nome: <?= $cargo->nome; ?></h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Departamento: <?= $departamento->nome; ?></li>
                </ul>
            </div>
            <div class="cardButtonsCargo">
                <a href="/cargo/edit?id=<?= $cargo->id; ?>"><button type="submit" class="btn btn-outline-primary">Editar</button></a>
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">Deletar</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja deletar esse cliente?
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
                    <form action="/cargo/delete" method="POST">
                        <input type="hidden" name="id" value=" <?= $cargo->id; ?>">
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require('views/partials/footer.php'); ?>