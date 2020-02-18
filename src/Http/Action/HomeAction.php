<?php

/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 21.01.2020
 * Time: 22:07
 */

namespace App\Http\Action;

use App\Http\Http;
use App\Http\JsonResponse;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class HomeAction implements RequestHandlerInterface
{
    /**
     * Handles a request and produces a response.
     *
     * May call other collaborating code to generate the response.
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse(new \stdClass());
    }
}
