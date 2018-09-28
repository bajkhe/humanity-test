<?php

namespace App\Observers\Interfaces;

interface ObserverInterface
{
    public function notify();

    public function created();

    public function updated();

    public function deleted();
}