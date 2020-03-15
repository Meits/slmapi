<?php
/**
 * Created by PhpStorm.
 * User: MeitsWorkPc
 * Date: 15.03.2020
 * Time: 20:42
 */

namespace App\Auth\Entity\User;


interface UserRepository
{
    public function hasByEmail(Email $email): bool;
    public function add(User $user): void;
}