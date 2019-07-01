<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<p class="intro">Lista de usuários</p>

<div class="container contTableListagem">
    <div class="tableButton">
        <a href="/usuario/create"><button type="button" class="btn btn-outline-primary">Novo</button></a>
    </div>
    <div class="table">
        <table class="table table-hover table-bordered tableListagem">
            <thead>
                <tr>
                    <td scope="col">#</td>
                    <td scope="col">Nome</td>
                    <td scope="col">Email</td>
                    <td scope="col">Detalhes</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuario as $usuario) : ?>
                    <tr>
                        <td scope="row"><?= $usuario->id; ?></td>
                        <td><?= $usuario->nome ?></td>
                        <td><?= $usuario->email ?></td>
                        <td><a href="/usuario/show?id=<?= $usuario->id; ?>">Ver mais</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php require('views/partials/footer.php'); ?>