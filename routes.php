<?php 

$router->define([
    '' => 'controllers/index.php',
    'edit' => 'view/cargo/edit.view.php',
    'create'=> 'controllers/save.php',
    'store'=>'controllers/add-cargo.php',
]);

$router->post('cargos', 'controllers/index.php');