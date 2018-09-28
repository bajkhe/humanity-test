<?php

namespace App\Services\Interfaces;

use App\Entity\User;

interface UserServiceInterface
{
    public function create(User $user) : User;

    public function update(User $user) : User;

    public function delete(User $user) : bool;
}