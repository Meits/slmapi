<?php
/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 09.03.2020
 * Time: 17:31
 */

namespace App\Auth\Command\JoinByEmail\Confirm;


use App\Auth\Entity\User\Email;
use App\Auth\Entity\User\Id;
use App\Auth\Entity\User\User;
use App\Auth\Entity\User\UserRepository;
use App\Auth\Service\JoinConfirmationSender;
use App\Auth\Service\PasswordHasher;
use App\Auth\Service\Tokenizer;
use App\Flusher;
use DateTimeImmutable;
use DomainException;

class Handler
{

    private $users;
    private $flusher;

    /**
     * Handler constructor.
     * @param $users
     * @param $flusher
     */
    public function __construct(UserRepository $users, Flusher $flusher)
    {
        $this->users = $users;
        $this->flusher = $flusher;
    }


    public function handle(Command $command): void
    {
        if($user = $this->users->findByConfirmToken($command->token)) {
            throw new DomainException('Incorrect token');
        }

        $this->confirmJoin($command->token, new \DateTimeImmutable());

        $this->flusher->flush();
    }
}