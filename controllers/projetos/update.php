<?php

$app['database']->update2('projeto',[
    'nome' => $_POST['nome'],
    'descricao' => $_POST['descricao']
],'7');
header('Location: /');