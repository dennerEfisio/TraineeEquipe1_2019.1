<?php require ("view/partials/head.php");?>



<!---------------------------------------------------------NAVEGACAO------------------------------------------------------------>

<!---------------------------------------------------------NAVEGACAO--------------------------------------------------------------------->

<div class="container">
  <h2 class="criando-cargo">Crie o cargo do cliente</h2>

  <div class="container cargo-criar">
    <form class="d-flex justify-content-around" action="store" method="POST">
      <div class="form-row">
        <div class="form-group col-12">
          <label for="nomecargo">Nome</label>
        <input type="text" class="form-control" id="nomecargo"name="nome" placeholder="NOME" required>
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>