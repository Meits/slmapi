<?php

/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 22.01.2020
 * Time: 22:52
 */

declare(strict_types=1);

return static function (\Psr\Container\ContainerInterface $container): \Slim\App {

    $app = \Slim\Factory\AppFactory::createFromContainer($container);
    (require __DIR__ . '/../config/middleware.php')(@$app, $container);
    (require __DIR__ . '/../config/routes.php')($app);
    return $app;
};
