<?php 


$router->get('index','CargoController@index');
$router->get('create','CargoController@create');
$router->post('store', 'CargoController@store');
$router->get('delete','CargoController@destroy');
$router->get('edit','CargoController@edit');
$router->get('show','CargoController@show');