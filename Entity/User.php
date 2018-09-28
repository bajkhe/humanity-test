<?php

namespace App\Entity;

use App\Observers\Traits\Observable;

class User extends AbstractEntity
{
    use Observable;

    public $first_name;
    public $last_name;
    public $date_of_birth;
    public $username;
    public $password;

    public $vacation_days;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }
}