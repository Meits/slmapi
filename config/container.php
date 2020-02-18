<?php

/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 22.01.2020
 * Time: 22:34
 */

declare(strict_types=1);

$builder = new \DI\ContainerBuilder();
$builder->addDefinitions(require __DIR__ . '/dependencies.php');
return $builder->build();
