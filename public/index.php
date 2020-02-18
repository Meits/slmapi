<?php

/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 20.01.2020
 * Time: 22:21
 */

declare(strict_types=1);

http_response_code(500);


require  __DIR__ . '/../vendor/autoload.php';

/** @var \Psr\Container\ContainerInterface $container */
$container = require __DIR__ . '/../config/container.php';

$app = (require __DIR__ . '/../config/app.php')($container);
$app->run();
