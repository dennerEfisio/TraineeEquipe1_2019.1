<?php

App::bind('config', require 'config.php');

$config = App::get('config');

App::bind('database', new QueryBuilder(
    Conection::make(App::get('config')['database'])
));

function view($name, $data=[]){
    extract($data);
    return require "view/{$name}.view.php";
}