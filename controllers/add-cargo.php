<?php

App::get('database')->insert('cargo', [
    'nome' =>$_POST['nome'],
    'departamento_id'=>1
]);

header('location: /');