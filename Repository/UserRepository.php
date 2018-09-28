<?php

namespace App\Repository;

use App\Entity\User;
use App\Repository\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    public function create(User $user) : User
    {
        // DB specific or DBAL specific query execution

        $user->fire('created');
    }

    public function read($id) : User
    {
        // DB specific or DBAL specific query execution
    }

    public function update(User $user) : User
    {
        // DB specific or DBAL specific query execution

        $user->fire('updated');
    }

    public function delete(User $user) : bool
    {
        // DB specific or DBAL specific query execution

        $user->fire('deleted');
    }
}