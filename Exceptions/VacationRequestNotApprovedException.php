<?php

namespace App\Exceptions;

use Exception;

class VacationRequestNotApprovedException extends Exception
{
    public function __construct($code = 0, Exception $previous = null) {
        parent::__construct("Vacation Request Entity does not have status APPROVED.", $code, $previous);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}