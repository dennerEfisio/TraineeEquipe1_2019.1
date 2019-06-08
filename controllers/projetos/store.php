<?php

$app['database']->insert('projeto', [
    'nome' => $_POST['nome'],
    'descricao' => $_POST['descricao']
]);
header('Location: /');