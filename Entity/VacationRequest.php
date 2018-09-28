<?php

namespace App\Entity;

use App\Observers\Traits\Observable;

class VacationRequest extends AbstractEntity
{
    use Observable;

    const WAITING = 0;
    const APPROVED = 1;
    const REJECTED = 2;

    public $user_id;
    public $from;
    public $to;
    public $status;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}