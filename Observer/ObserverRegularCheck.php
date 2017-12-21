<?php

namespace Observer;

class ObserverRegularCheck implements Observer
{
    protected $nextCheck = null;
    protected $interval;

    public function __construct($start, $interval)
    {
        $this->nextCheck = $start;
        $this->interval = $interval;
    }

    public function update(Observable $observable)
    {
        if (! $observable instanceof Printer) {
            return;
        }

        if ($observable->getPageCounter() >= $this->nextCheck) {
            printf("Regular printer maintenance required after %d printed pages.\n", $this->nextCheck);

            $this->nextCheck += $this->interval;
        }
    }
}
