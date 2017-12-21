<?php

use Observer\LaserPrinterObservable;
use Observer\ObserverInitialCheck;
use Singleton\Book;

require '../autoloader.php';

$book = new Book('PC', 580);
$printer = new LaserPrinterObservable('Printer 1');
$initialCheck = new ObserverInitialCheck(10000);
$printer->attach($initialCheck);

$printer->turnOn();
$printer->printPublication($book, 10);
printf("Number of printed pages: %d\n", $printer->getPageCounter());

$printer->printPublication($book, 10);
printf("Number of printed pages: %d\n", $printer->getPageCounter());

$printer->turnOff();
