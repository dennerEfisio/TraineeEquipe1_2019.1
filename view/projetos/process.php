<?php
die("sla menor");

// conecta ao banco de dados
$mysqli = new mysqli('localhost', 'root' , '', 'codigosenior') or die(mysqli_error($mysqli));

// salva no banco de dados
if(isset($_POST['botaoCriarProjetoNovo'])){
   $nome = $_POST['criarProjetoNome'];
   $descricao = $_POST['CriarProjetoDescrição'];

   $mysqli->query("INSERT INTO projeto (nome , descricao) VALUES('$nome', '$descricao')") or die($mysqli->error);

}


