<?php

$projeto= $app['database']->select('projeto',7);

require 'views/projetos/edit.view.php';