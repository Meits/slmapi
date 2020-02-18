<?php

/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 22.01.2020
 * Time: 22:32
 */

declare(strict_types=1);

require __DIR__ . '/../config/constants.php';


$files = array_merge(
    glob(__DIR__ . '/common/*.php') ?: [],
    glob(__DIR__ . '/' . (APP_ENV ?: "prod") . "/*.php") ?: []
);
$configs = array_map(
    static function (string $file): array {

        /**
         * @var array
         * @noinspection PhpIncludeInspection
         * @psalm-suppress UnresolvableInclude
         */
        return require $file;
    },
    $files
);
return array_merge_recursive(...$configs);
