<?php
/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 15.03.2020
 * Time: 20:31
 */

declare(strict_types=1);

namespace App\Auth\Entity\User;

use App\Auth\Service\PasswordHasher;
use DateTimeImmutable;
use DomainException;


class User
{

    public const STATUS_WAIT = 'wait';
    public const STATUS_ACTIVE = 'active';

    private  $id;
    private  $date;
    private  $email;
    private  $passwordHash = null;
    private  $joinConfirmToken = null;
    private  $status;


    public function __construct(
        Id $id,
        DateTimeImmutable $date,
        Email $email,
        $passwordHash,
        Token $token
    )
    {
        $this->id = $id;
        $this->date = $date;
        $this->email = $email;
        $this->passwordHash = $passwordHash;
        $this->joinConfirmToken = $token;
        $this->status = Status::wait();


    }

    public function confirmJoin(string $token, DateTimeImmutable $date): void
    {
        if ($this->joinConfirmToken === null) {
            throw new DomainException('Confirmation is not required.');
        }
        $this->joinConfirmToken->validate($token, $date);
        $this->status = Status::active();
        $this->joinConfirmToken = null;
    }



    public function getId()
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isWait()
    {
        return $this->status->isWait();
    }
    public function isActive()
    {
        return $this->status->isActive();
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    public function getJoinConfirmToken()
    {
        return $this->joinConfirmToken;
    }

}