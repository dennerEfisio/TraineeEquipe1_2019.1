<?php

$router->get('', 'projetoController@index');
$router->get('create', 'projetoController@create');
$router->post('store', 'projetoController@store');
$router->get('edit', 'projetoController@edit');
$router->get('show', 'projetoController@show');
$router->get('delete', 'projetoController@delete');
$router->get('update', 'projetoController@update');
