<?php

/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 22.01.2020
 * Time: 22:57
 */

declare(strict_types=1);

use Symfony\Component\Console\Command\Command;

/** @var \Psr\Container\ContainerInterface $container */
$container = require __DIR__ . '/../config/container.php';
$cli = new \Symfony\Component\Console\Application('console');
/**
 * @var string[] $commands
 * @psalm-suppress MixedArrayAccess
 */
$commands = $container->get('config')['console']['commands'];

foreach ($commands as $name) {
    /** @var Command $command */
    $command = $container->get($name);
    $cli->add($command);
}

$cli->run();
