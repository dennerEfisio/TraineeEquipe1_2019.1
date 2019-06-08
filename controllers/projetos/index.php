<?php

$projetos = $app['database']->selectAll('projeto');

require 'views/projetos/index.view.php';