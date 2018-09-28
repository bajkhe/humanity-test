<?php

namespace App\Repository;

use App\Entity\VacationRequest;
use App\Repository\Interfaces\VacationRequestRepositoryInterface;

class VacationRequestRepository implements VacationRequestRepositoryInterface
{

    public function create(VacationRequest $vacationRequest) : VacationRequest
    {
        // DB specific or DBAL specific query execution

        $vacationRequest->fire('created');
    }

    public function read($id) : VacationRequest
    {
        // DB specific or DBAL specific query execution
    }

    public function update(VacationRequest $vacationRequest) : VacationRequest
    {
        // DB specific or DBAL specific query execution

        $vacationRequest->fire('updated');
    }

    public function delete(VacationRequest $vacationRequest) : bool
    {
        // DB specific or DBAL specific query execution

        $vacationRequest->fire('deleted');
    }

    public function approve(VacationRequest $vacationRequest) : VacationRequest
    {
        // DB specific or DBAL specific query execution

        $vacationRequest->fire('approved');
    }

    public function reject(VacationRequest $vacationRequest) : VacationRequest
    {
        // DB specific or DBAL specific query execution

        $vacationRequest->fire('rejected');
    }
}