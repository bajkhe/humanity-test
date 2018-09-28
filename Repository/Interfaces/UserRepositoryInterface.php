<?php

namespace App\Repository\Interfaces;

use App\Entity\User;

interface UserRepositoryInterface
{
    public function create(User $user) : User;

    public function read($id) : User;

    public function update(User $user) : User;

    public function delete(User $user) : bool;
}