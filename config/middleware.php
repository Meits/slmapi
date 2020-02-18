<?php

/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 22.01.2020
 * Time: 22:28
 */

declare(strict_types=1);

return static function (\Slim\App $app, \Psr\Container\ContainerInterface $container): void {

    /** @psalm-var array{debug:bool} */
    $config = $container->get('config');

    $app->addErrorMiddleware($config['debug'], true, true);
};