<?php

$router->get('home', 'dashboardController@index');
$router->get('login', 'loginController@index');
$router->post('login', 'loginController@login');
$router->get('logout', 'loginController@logout');


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

$router->get('cargo/index', 'cargoController@index');
$router->get('cargo/create', 'cargoController@create');
$router->post('cargo/store', 'cargoController@store');
$router->get('cargo/edit', 'cargoController@edit');
$router->get('cargo/show', 'cargoController@show');
$router->post('cargo/delete', 'cargoController@delete');
$router->post('cargo/update', 'cargoController@update');

$router->get('cliente/index', 'clienteController@index');
$router->get('cliente/create', 'clienteController@create');
$router->post('cliente/store', 'clienteController@store');
$router->get('cliente/edit', 'clienteController@edit');
$router->get('cliente/show', 'clienteController@show');
$router->post('cliente/delete', 'clienteController@delete');
$router->post('cliente/update', 'clienteController@update');

$router->get('servico/index', 'servicoController@index');
$router->get('servico/create', 'servicoController@create');
$router->post('servico/store', 'servicoController@store');
$router->get('servico/edit', 'servicoController@edit');
$router->get('servico/show', 'servicoController@show');
$router->post('servico/delete', 'servicoController@delete');
$router->post('servico/update', 'servicoController@update');
