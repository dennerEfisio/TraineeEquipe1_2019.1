<?php

$router->get('projeto/index', 'projetoController@index');
$router->get('projeto/create', 'projetoController@create');
$router->post('projeto/store', 'projetoController@store');
$router->get('projeto/edit', 'projetoController@edit');
$router->get('projeto/show', 'projetoController@show');
$router->post('projeto/delete', 'projetoController@delete');
$router->post('projeto/update', 'projetoController@update');
