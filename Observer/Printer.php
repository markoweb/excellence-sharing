<?php

namespace Observer;

use Singleton\Publication;

interface Printer
{
    public function turnOn();
    public function turnOff();
    public function printPublication(Publication $p, $count = 1);
    public function getType();
    public function getPageCounter();
}
