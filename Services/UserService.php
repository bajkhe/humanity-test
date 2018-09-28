<?php

namespace App\Services;

use App\Entity\User;
use App\Repository\Interfaces\UserRepositoryInterface;
use App\Services\Interfaces\UserServiceInterface;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(User $user) : User
    {
        // application specific logic

        $repoUser = $this->repository->create($user);

        // application specific logic

        return $repoUser;
    }

    public function update(User $user) : User
    {
        // application specific logic

        $repoUser = $this->repository->update($user);

        // application specific logic

        return $repoUser;
    }

    public function delete(User $user) : bool
    {
        // application specific logic

        return $this->repository->delete($user);
    }
}