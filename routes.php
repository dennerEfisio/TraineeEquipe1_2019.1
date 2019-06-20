<?php

$router->get('projeto/index', 'projetoController@index');
$router->get('projeto/create', 'projetoController@create');
$router->post('projeto/store', 'projetoController@store');
$router->get('projeto/edit', 'projetoController@edit');
$router->get('projeto/show', 'projetoController@show');
$router->post('projeto/delete', 'projetoController@delete');
$router->post('projeto/update', 'projetoController@update');

$router->get('usuario/index', 'usuarioController@index');
$router->get('usuario/create', 'usuarioController@create');
$router->post('usuario/store', 'usuarioController@store');
$router->get('usuario/edit', 'usuarioController@edit');
$router->get('usuario/show', 'usuarioController@show');
$router->post('usuario/delete', 'usuarioController@delete');
$router->post('usuario/update', 'usuarioController@update');
