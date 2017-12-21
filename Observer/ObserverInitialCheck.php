<?php

namespace Observer;

class ObserverInitialCheck implements Observer
{
    protected $checkPageCounter;

    public function __construct($pageCounter = 10000)
    {
        $this->checkPageCounter = $pageCounter;
    }

    public function update(Observable $observable)
    {
        if (! $observable instanceof Printer) {
            return;
        }

        if ($observable->getPageCounter() >= $this->checkPageCounter) {
            printf("Initial printer maintenance required after %d printed pages\n", $this->checkPageCounter);
        }

        $observable->detach($this);
    }
}
