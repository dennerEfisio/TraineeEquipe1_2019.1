<?php

$app['database']->delete('cargo', [
    'id' =>$_POST['id']
]);

header('location: /');