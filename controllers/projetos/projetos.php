<?php

$projetos = $app['database']->selectAll('projeto');

require 'views/projetos/projetos.view.php';