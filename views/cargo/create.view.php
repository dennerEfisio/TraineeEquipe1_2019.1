<?php require('views/partials/header.php'); ?>
<?php require('views/partials/nav.php'); ?>

<body>
  <p class="intro">Criar Cargo</p>

  <div class="container">
    <form method="POST" action="/cargo/store">
      <div class="form-row">
        <div class="form-group col-8">
          <label for="nomecargo">Nome</label>
          <input type="text" class="form-control" placeholder="Nome" name="nome" required>
        </div>
        <div class="form-group col-4">
          <label for="departamentocargo">Departamento</label>
          <select class="form-control" name="departamento_id" required>
            <option>Selecione o departamento</option>
            <?php foreach ($departamentos as $departamento) : ?>
              <option value="<?= $departamento->id; ?>"><?= $departamento->nome ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div>
          <a href="/cargo/index"><button type="button" class="btn btn-outline-dark botaozinho">Voltar</button></a>
          <button type="submit" class="btn btn-outline-primary">Criar</button>
        </div>
      </div>
    </form>
  </div>

  <?php require('views/partials/footer.php'); ?>