<?php

namespace Observer;

use Singleton\Publication;

class LaserPrinterObservable extends LaserPrinter implements Observable
{
    /** @var Observer[] */
    protected $observers = [];

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        $key = array_search($observer, $this->observers, true);
        if (false !== $key) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function printPublication(Publication $p, $count = 1)
    {
        if (true !== $this->turnedOn) {
            return false;
        }

        $pageCount = $p->getPageCount();
        $this->pageCounter += $pageCount * $count;
        $this->notify();

        return true;
    }
}
