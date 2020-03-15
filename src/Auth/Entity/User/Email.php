<?php
/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 15.03.2020
 * Time: 20:11
 */

namespace App\Auth\Entity\User;


use Webmozart\Assert\Assert;

class Email
{
    private $value;

    /**
     * Email constructor.
     */
    public function __construct(string $value)
    {
        Assert::notEmpty($value);
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw  new \InvalidArgumentException("Incorect email");
        }

        $this->value = mb_strtolower($value);
    }

    public function getValue(): string
    {
        return $this->value;
    }

}