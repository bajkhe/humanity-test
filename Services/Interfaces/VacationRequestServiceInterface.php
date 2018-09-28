<?php

namespace App\Services\Interfaces;

use App\Entity\VacationRequest;

interface VacationRequestServiceInterface
{
    public function create(VacationRequest $vacationRequest) : VacationRequest;

    public function update(VacationRequest $vacationRequest) : VacationRequest;

    public function delete(VacationRequest $vacationRequest) : bool;

    public function approve(VacationRequest $vacationRequest) : VacationRequest;

    public function reject(VacationRequest $vacationRequest) : VacationRequest;
}