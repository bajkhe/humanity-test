<?php

namespace App\Services;

use App\Entity\VacationRequest;
use App\Exceptions\VacationRequestStatusException;
use App\Repository\Interfaces\VacationRequestRepositoryInterface;
use App\Services\Interfaces\VacationRequestServiceInterface;

class VacationRequestService implements VacationRequestServiceInterface
{
    /**
     * @var VacationRequestRepositoryInterface
     */
    private $repository;

    public function __construct(VacationRequestRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function create(VacationRequest $vacationRequest) : VacationRequest
    {
        // application specific logic

        $repoVacationRequest = $this->repository->create($vacationRequest);

        // application specific logic

        return $repoVacationRequest;
    }

    public function update(VacationRequest $vacationRequest) : VacationRequest
    {
        // application specific logic

        $repoVacationRequest = $this->repository->update($vacationRequest);

        // application specific logic

        return $repoVacationRequest;
    }

    public function delete(VacationRequest $vacationRequest) : bool
    {
        // application specific logic

        return $this->repository->delete($vacationRequest);
    }

    public function approve(VacationRequest $vacationRequest) : VacationRequest
    {
        if($vacationRequest->status !== VacationRequest::WAITING){
            throw new VacationRequestStatusException();
        }

        // application specific logic

        $repoVacationRequest = $this->repository->approve($vacationRequest);

        // application specific logic

        return $repoVacationRequest;
    }

    public function reject(VacationRequest $vacationRequest) : VacationRequest
    {
        if($vacationRequest->status !== VacationRequest::WAITING){
            throw new VacationRequestStatusException();
        }

        // application specific logic

        $repoVacationRequest = $this->repository->reject($vacationRequest);

        // application specific logic

        return $repoVacationRequest;
    }
}