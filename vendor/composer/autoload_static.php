<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c75b9384e13904c29f4d9265369cfe4
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'Compito' => __DIR__ . '/../..' . '/core/TableClasses/Compito.php',
        'ComposerAutoloaderInit4c75b9384e13904c29f4d9265369cfe4' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit4c75b9384e13904c29f4d9265369cfe4' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'ListController' => __DIR__ . '/../..' . '/controller/ListController.php',
        'Lista' => __DIR__ . '/../..' . '/core/TableClasses/Lista.php',
        'LoginController' => __DIR__ . '/../..' . '/controller/LoginController.php',
        'PagesController' => __DIR__ . '/../..' . '/controller/PagesController.php',
        'Progetto' => __DIR__ . '/../..' . '/core/TableClasses/Progetto.php',
        'ProjectController' => __DIR__ . '/../..' . '/controller/ProjectController.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'SignupController' => __DIR__ . '/../..' . '/controller/SignupController.php',
        'TaskController' => __DIR__ . '/../..' . '/controller/TaskController.php',
        'User' => __DIR__ . '/../..' . '/core/TableClasses/User.php',
        'UserController' => __DIR__ . '/../..' . '/controller/UserController.php',
        'errors' => __DIR__ . '/../..' . '/controller/errors.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4c75b9384e13904c29f4d9265369cfe4::$classMap;

        }, null, ClassLoader::class);
    }
}
