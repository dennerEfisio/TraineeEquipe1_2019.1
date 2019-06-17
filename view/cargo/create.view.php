<?php require ("view/partials/head.php");?>
<?php require ("view/partials/nav.php");?>




<!---------------------------------------------------------NAVEGACAO------------------------------------------------------------>

<!---------------------------------------------------------NAVEGACAO--------------------------------------------------------------------->

<div class="container">
  <h2 class="criando-cargo">Crie o cargo do cliente</h2>

  <div class="container cargo-criar">
    <form class="d-flex justify-content-around" autocomplete="off" action="store" method="POST">
      <div class="form-row">
        <div class="form-group col-12">
          <label for="nomecargo">Nome</label>
        <input type="text" class="form-control" autocomplete="off" id="nomecargo"name="nome" placeholder="Ex: João" required>
        </div>
        <div class="form-group col-12">
          <label for="departamentocargo">Departamento</label>
        <select class="form-control" name="departamento_id"id="departamentocargo" required>
            <option>Selecione o departamento</option>
            <option>Gerente</option>
            <option>Diretor</option>
            <option>Presidente</option>
            <option>Projetista</option>
            <option>Consultor</option>
          </select>
        </div>
        <div class="d-flex justify-content-center">
      <button type="submmit" class="btn btn-outline-primary botaozinho" name="criar">Criar</button>
      <button type="reset" class="btn btn-outline-dark botaozinho" name="voltar">Voltar</button>
      </div>
    </div>
    </form>
    
  </div>
</div>


<?php require ("view/partials/footer.php");?>