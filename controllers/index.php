<?php 
$cargos= App::get('database')->selectAll('cargo');
require 'view/cargo/index.view.php';