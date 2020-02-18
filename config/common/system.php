<?php

/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 22.01.2020
 * Time: 22:37
 */

declare(strict_types=1);

return [
    'config' => [
        'debug' => true,
    ]
    /*,
    \App\Http\Action\HomeAction::class => function() {
        return new \App\Http\Action\HomeAction(new \Slim\Psr7\Factory\ResponseFactory());
    }*/
    ,
    //\Psr\Http\Message\ResponseFactoryInterface::class => Di\get(\Slim\Psr7\Factory\ResponseFactory::class)
];
