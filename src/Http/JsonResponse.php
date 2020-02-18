<?php

/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 22.01.2020
 * Time: 22:19
 */

namespace App\Http;

use Slim\Psr7\Factory\StreamFactory;
use Slim\Psr7\Headers;
use Slim\Psr7\Response;

class JsonResponse extends Response
{


    /**
     * JsonResponse constructor.
     * @param mixed $data
     * @param int $status
     */
    public function __construct($data, int $status = 200)
    {
        parent::__construct(
            $status,
            new Headers(['Content-Type' => 'application/json']),
            (new StreamFactory())->createStream(json_encode($data))
        );
    }
}
