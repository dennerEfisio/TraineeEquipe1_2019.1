<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<p class="intro">Lista de Cargos</p>

<div class="container contTableListagem">
    <div class="tableButton">
        <a href="/cargo/create"><button type="button" class="btn btn-outline-primary">Novo</button></a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered tableListagem">
            <thead>
                <tr>
                    <td scope="col">#</td>
                    <td scope="col">Nome</td>
                    <td scope="col">Departamento</td>
                    <td scope="col">Detalhes</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cargos as $cargo) : ?>
                    <tr>
                        <td scope="row"><?= $cargo->id; ?></td>
                        <td><?= $cargo->nome; ?></td>
                        <td><?= $cargo->departamento_id; ?></td>
                        <td><a href="/cargo/show?id=<?= $cargo->id; ?>">Ver mais</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require('views/partials/footer.php'); ?>