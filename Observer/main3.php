<?php

use Observer\LaserPrinterObservable;
use Observer\ObserverInitialCheck;
use Observer\ObserverRegularCheck;
use Singleton\Book;

require '../autoloader.php';

$book = new Book('PC', 580);

$printer = new LaserPrinterObservable('Printer 1');
$initialCheck = new ObserverInitialCheck(10000);
$regularCheck = new ObserverRegularCheck(40000, 30000);
$printer->attach($initialCheck);
$printer->attach($regularCheck);

$printer->turnOn();
$printer->printPublication($book, 20);
printf("Number of printed pages: %d\n", $printer->getPageCounter());

$printer->printPublication($book, 60);
printf("Number of printed pages: %d\n", $printer->getPageCounter());

$printer->printPublication($book, 50);
printf("Number of printed pages: %d\n", $printer->getPageCounter());

$printer->turnOff();
