<?php

namespace App\Services\Interfaces;

use App\Entity\Vacation;
use App\Entity\VacationRequest;

interface VacationServiceInterface
{
    public function create(VacationRequest $vacationRequest) : Vacation;

    public function update(Vacation $vacation) : Vacation;

    public function delete(Vacation $vacation) : bool;
}