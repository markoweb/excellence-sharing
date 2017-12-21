<?php

namespace Observer;

use Singleton\Publication;

class LaserPrinter implements Printer
{
    protected $turnedOn = false;
    protected $type = null;
    protected $pageCounter = 0;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function turnOn()
    {
        $this->turnedOn = true;
    }

    public function turnOff()
    {
        $this->turnedOn = false;
    }

    public function getType()
    {
        return $this->type;
    }

    public function printPublication(Publication $p, $count = 1)
    {
        if (true !== $this->turnedOn) {
            return false;
        }

        $pageCount = $p->getPageCount();
        $this->pageCounter += $pageCount * $count;

        return true;
    }

    public function getPageCounter()
    {
        return $this->pageCounter;
    }
}
