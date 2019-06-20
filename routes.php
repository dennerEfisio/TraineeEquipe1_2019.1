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

$router->get('departamento/index', 'departamentoController@index');
$router->get('departamento/create', 'departamentoController@create');
$router->post('departamento/store', 'departamentoController@store');
$router->get('departamento/edit', 'departamentoController@edit');
$router->get('departamento/show', 'departamentoController@show');
$router->post('departamento/delete', 'departamentoController@delete');
$router->post('departamento/update', 'departamentoController@update');

$router->get('tipo/index', 'tipoController@index');
$router->get('tipo/create', 'tipoController@create');
$router->post('tipo/store', 'tipoController@store');
$router->get('tipo/edit', 'tipoController@edit');
$router->get('tipo/show', 'tipoController@show');
$router->post('tipo/delete', 'tipoController@delete');
$router->post('tipo/update', 'tipoController@update');
