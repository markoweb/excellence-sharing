<?php

use Observer\LaserPrinter;
use Singleton\Book;

require '../autoloader.php';

$book = new Book('PC', 580);
$printer = new LaserPrinter('Printer 1');

$printer->turnOn();
$printer->printPublication($book, 10);
printf("Number of printed pages: %d\n", $printer->getPageCounter());
