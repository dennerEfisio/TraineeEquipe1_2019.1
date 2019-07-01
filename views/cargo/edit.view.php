<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<body>
  <p class="intro">Editar Usuário</p>

  <div class="container">
    <form class="form-row" method="POST" action="/cargo/update">
      <div class="form-group col-12 col-md-6  formulario-cliente">
        <label for="nomecliente">Nome</label>
        <input type="text" class="form-control" name="nome" value="<?= $cargo->nome; ?>">
      </div>
      <div class="form-group col-12 col-md-6 formulario-cliente">
        <label for="tipocliente">Departamento</label>
        <select class="form-control" name="departamento_id">
          <?php foreach ($departamentos as $departamento) : ?>
            <option value="<?= $departamento->id; ?>"><?= $departamento->nome ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <input type="hidden" name="id" value="<?= $cargo->id; ?>">
      <div>
        <a href="/cargo/index"><button type="button" class="btn btn-outline-dark">Voltar</button></a>
        <button type="submit" class="btn btn-outline-primary">Editar</button>
      </div>
    </form>
  </div>
  <?php require('views/partials/footer.php'); ?>