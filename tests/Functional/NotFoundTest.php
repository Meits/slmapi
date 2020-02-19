<?php
/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 19.02.2020
 * Time: 22:28
 */

declare(strict_types=1);

namespace Test\Functional;

class NotFoundTest extends WebTestCase
{
    public function testNotFound(): void
    {
        $response = $this->app()->handle(self::json('GET', '/not-found'));

        self::assertEquals(404, $response->getStatusCode());
    }
}