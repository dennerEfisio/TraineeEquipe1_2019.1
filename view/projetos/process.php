<?php

//inicia seção
session_start();

// conecta ao banco de dados
$mysqli = new mysqli('localhost', 'root' , '', 'codigosenior') or die(mysqli_error($mysqli));

//inicia variáveis
$nome = '';
$descricao = '';

// salva no banco de dados
if(isset($_POST['botaoCriarProjetoNovo'])){
   $nome = $_POST['criarProjetoNome'];
   $descricao = $_POST['CriarProjetoDescrição'];

   $mysqli->query("INSERT INTO projeto (nome , descricao) VALUES('$nome', '$descricao')") or die($mysqli->error);

   $_SESSION['message'] = "Projeto salvo!";
   $_SESSION['msg_type'] = "sucess";

   header("location: listar-projetos.php");
}

//deleta no banco de dados
if(isset($_GET['deletaProjeto'])){
   $id = $_GET['delete'];
   $mysqli->query("DELETE FROM projeto WHERE id=$id") or die($mysqli->error());

   $_SESSION['message'] = "Projeto deletado!";
   $_SESSION['msg_type'] = "danger";

   header("location: listar-projetos.php");
}

//mostrar cartão de edição
if(isset($_GET['verMaisEspecifico'])){
   $id = $GET_['verMaisEspecifico'];
   $result = $mysqli->query("SELECT * FROM projeto WHERE id=$id") or die($mysqli->error());
   if(count($result)==1){
      $row = fetch_array();
      $nome = $row['name'];
      $descricao = $row['descricao'];
   }
}


