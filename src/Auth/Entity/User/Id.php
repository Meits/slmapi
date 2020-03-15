<?php
/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 15.03.2020
 * Time: 20:19
 */

namespace App\Auth\Entity\User;

use Ramsey\Uuid\Uuid;
use Webmozart\Assert\Assert;


class Id
{
    private  $value;

    public function __construct(string $value)
    {
        Assert::uuid($value);
        $this->value = mb_strtolower($value);
    }

    public static function generate(): self
    {
        return new self(Uuid::uuid4()->toString());
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->getValue();
    }
}