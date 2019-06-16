<?php 


$router->get('index','CargoController@index');
$router->get('create','CargoController@create');
$router->get('store', 'CargoController@store');
$router->get('delete','CargoController@delete');
$router->get('edit','CargoController@edit');
$router->get('show','CargoController@show');