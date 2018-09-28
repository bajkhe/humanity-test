<?php

namespace App\Repository\Interfaces;

use App\Entity\VacationRequest;

interface VacationRequestRepositoryInterface
{
    public function create(VacationRequest $vacationRequest) : VacationRequest;

    public function read($id) : VacationRequest;

    public function update(VacationRequest $vacationRequest) : VacationRequest;

    public function delete(VacationRequest $vacationRequest) : bool;

    public function approve(VacationRequest $vacationRequest) : VacationRequest;

    public function reject(VacationRequest $vacationRequest) : VacationRequest;
}