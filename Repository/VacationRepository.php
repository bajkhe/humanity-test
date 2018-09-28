<?php

namespace App\Repository;

use App\Entity\User;
use App\Entity\Vacation;
use App\Repository\Interfaces\VacationRepositoryInterface;

class VacationRepository implements VacationRepositoryInterface
{

    public function create(Vacation $vacation) : Vacation
    {
        // DB specific or DBAL specific query execution

        $vacation->fire('created');
    }

    public function read($id) : Vacation
    {
        // DB specific or DBAL specific query execution
        // returns vacation found by ID
    }

    public function update(Vacation $vacation) : Vacation
    {
        // DB specific or DBAL specific query execution

        $vacation->fire('updated');
    }

    public function delete(Vacation $vacation) : bool
    {
        // DB specific or DBAL specific query execution

        $vacation->fire('deleted');
    }

    public function vacationsTakenInCurrentYear(User $user): array
    {
        // DB specific or DBAL specific query execution
        // returns array of vacations taken by user in current year
    }
}