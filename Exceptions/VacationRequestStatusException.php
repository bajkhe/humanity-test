<?php

namespace App\Exceptions;

use Exception;

class VacationRequestStatusException extends Exception
{
    public function __construct($code = 0, Exception $previous = null) {
        parent::__construct("Vacation Request Entity must have status WAITING.", $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}