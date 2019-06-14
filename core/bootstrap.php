<?php

App::bind('config', require 'config.php');

$config = App::get('config');

/*$app = [];

$app['config'] = require 'config.php';

require 'core/database/conection.php';
require 'core/database/querybuilder.php';
require 'core/router.php';
require 'core/request.php';
*/

App::bind('database', new QueryBuilder(
    Conection::make(App::get('config')['database'])
));
