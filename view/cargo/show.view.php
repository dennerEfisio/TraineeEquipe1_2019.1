<?php require("view/partials/head.php"); ?>


<h2 class="intro-vendo-mais-cargo">INFORMAÇÕES SOBRE O CARGO</h2>


<div class="container">
    <div class="container for-about d-flex justify-content-center">
        <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <a class="btn btn-outline-primary botao-edit" href="edit">Editar</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                Deletar
            </button>
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
                    <a href=delete><button type="button" class="btn btn-danger"> Deletar </button></a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<?php require ("view/partials/footer.php");?>