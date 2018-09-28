<?php

namespace App\Observers\Traits;

use App\Observers\Interfaces\ObserverInterface;

trait Observable
{
    private $observers;

    public function attach(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(ObserverInterface $observer)
    {
        foreach ($this->observers as $key => $val) {
            if($val == $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function fire($event)
    {
        foreach ($this->observers as $key => $val) {
            if(method_exists($val, $event)) {
                $this->observers[$key]->{$event}();
            }
        }
    }
}