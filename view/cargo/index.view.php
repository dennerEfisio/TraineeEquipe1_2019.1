<?php require('view/partials/head.php');?>

    <p class="intro-listando-cargo">LISTAGEM DE CARGO</p>


    <div class="container contTableListagem">
        <div class="tableButton">
            <a class="btn btn-outline-primary botaozinho2" id="botaoNovoCargoLista" href="create">Novo</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-bordered tableListagem">
                <thead>
                    <tr>
                        <td scope="col">ID</td>
                        <td scope="col">Nome</td>
                        <td scope="col">Departamento</td>
                        <td scope="col">Ver Mais</td>
                    </tr>
                </thead>
                <tbody>
                
                 <?php foreach($cargos as $cargo):?>
                    <tr>
                        <td><?= $cargo->id;?></td>
                        <td><?= $cargo->nome;?></td>
                        <td><?= $cargo->departamento_id;?></td>
                        <td><a href="show">Ver mais</a></td>
                    </tr>
                 <?php endforeach ;?>
                   
                 
                </tbody>
            </table>
        </div>
    </div>
<?php require('view/partials/footer.php');?>