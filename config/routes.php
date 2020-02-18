<?php

/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 22.01.2020
 * Time: 22:26
 */

declare(strict_types=1);

return static function (\Slim\App $app): void {

    $app->get('/', \App\Http\Action\HomeAction::class);
};
