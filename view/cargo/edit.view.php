<?php require ("view/partials/head.php");?>

  <!---------------------------------------------------------NAVEGACAO------------------------------------------------------------>

  <!---------------------------------------------------------NAVEGACAO--------------------------------------------------------------------->

  <div class="container">
    <h2 class="criando-cargo">Edite o cargo do cliente</h2>

    <div class="container cargo-criar">
      <form class="d-flex justify-content-around" action='update'>
        <div class="form-row">
          <div class="form-group col-12">
            <label for="exampleFormControlInput1">Nome</label>
            <input type="text" class="form-control" id="nomecargo" value="">
          </div>
          <div class="form-group col-12">
            <label for="departamentocargo">Departamento</label>
            <select class="form-control" id="departamentocargo" value="departamentocargo">
              <option>Selecione o departamento</option>
              <option>Gerente</option>
              <option>Diretor</option>
              <option>Presidente</option>
              <option>Projetista</option>
              <option>Consultor</option>
            </select>
          </div>
          <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-outline-primary botaozinho">Editar</button>
        <button type="button" class="btn btn-outline-dark botaozinho">Voltar</button>
      </div>
        </div>
      </form>
    </div>
  </div>

  <?php require ("view/partials/footer.php");?>