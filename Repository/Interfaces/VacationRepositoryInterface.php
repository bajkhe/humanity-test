<?php

namespace App\Repository\Interfaces;

use App\Entity\User;
use App\Entity\Vacation;

interface VacationRepositoryInterface
{
    public function create(Vacation $vacation) : Vacation;

    public function read($id) : Vacation;

    public function update(Vacation $vacation) : Vacation;

    public function delete(Vacation $vacation) : bool;

    public function vacationsTakenInCurrentYear(User $user) : array;
}