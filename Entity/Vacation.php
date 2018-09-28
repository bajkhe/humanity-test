<?php

namespace App\Entity;

use App\Observers\Traits\Observable;

class Vacation extends AbstractEntity
{
    use Observable;

    public $user_id;
    public $from;
    public $to;
    public $total;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}