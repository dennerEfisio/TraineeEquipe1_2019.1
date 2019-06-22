<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc19c5ce9aba37189ff788fdcdd17ddf3
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInitc19c5ce9aba37189ff788fdcdd17ddf3' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitc19c5ce9aba37189ff788fdcdd17ddf3' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'cargoController' => __DIR__ . '/../..' . '/controllers/cargoController.php',
        'clienteController' => __DIR__ . '/../..' . '/controllers/clienteController.php',
        'departamentoController' => __DIR__ . '/../..' . '/controllers/departamentoController.php',
        'projetoController' => __DIR__ . '/../..' . '/controllers/projetoController.php',
        'tipoController' => __DIR__ . '/../..' . '/controllers/tipoController.php',
        'usuarioController' => __DIR__ . '/../..' . '/controllers/usuarioController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc19c5ce9aba37189ff788fdcdd17ddf3::$classMap;

        }, null, ClassLoader::class);
    }
}
