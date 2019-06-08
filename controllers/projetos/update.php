<?php

$app['database']->update('projeto',[
    'nome' => $_POST['nome'],
    'descricao' => $_POST['descricao']
],'7');
header('Location: /');