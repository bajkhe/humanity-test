<?php

namespace App\Services;

use App\Entity\User;
use App\Entity\Vacation;
use App\Entity\VacationRequest;
use App\Exceptions\VacationRequestNotApprovedException;
use App\Repository\Interfaces\VacationRepositoryInterface;
use App\Services\Interfaces\VacationServiceInterface;

class VacationService implements VacationServiceInterface
{
    /**
     * @var VacationRepositoryInterface
     */
    private $repository;

    public function __construct(VacationRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(VacationRequest $vacationRequest) : Vacation
    {
        if($vacationRequest->status !== VacationRequest::APPROVED) {
            throw new VacationRequestNotApprovedException();
        }

        $vacation = new Vacation();

        // populate $vacation data from $vacationRequest

        $from = date_create_from_format('Y-m-d H:i:s', $vacation->from);
        $to = date_create_from_format('Y-m-d H:i:s', $vacation->to);

        $diff = date_diff($from, $to);
        $vacation->total = $diff->format('%d');

        // application specific logic

        $repoVacation = $this->repository->create($vacation);

        // application specific logic

        return $repoVacation;
    }

    public function update(Vacation $vacation) : Vacation
    {
        // application specific logic

        $repoVacation = $this->repository->update($vacation);

        // application specific logic

        return $repoVacation;
    }

    public function delete(Vacation $vacation) : bool
    {
        // application specific logic

        return $this->repository->delete($vacation);
    }

    public function getRemainingVacationDaysInCurrentYear(User $user) : int
    {
        // application specific logic

        $days = $this->repository->vacationsTakenInCurrentYear($user);

        $daysTaken = 0;

        /** @var Vacation $day */
        foreach ($days as $day) {
            $daysTaken += $day->total;
        }

        return $daysTaken;
    }
}