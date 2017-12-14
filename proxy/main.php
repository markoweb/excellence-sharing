<?php

use Proxy\OutOfRangeException;
use Proxy\PrepaidPublicationProxy;
use Proxy\Book;

require '../autoloader.php';

$book = new Book('medicine', 650);
$proxy = new PrepaidPublicationProxy($book, 261, 414);

$proxy->open();
try {
    $proxy->setPageNumber(300);
    print "The book is opened on the page 300" . PHP_EOL;

    $proxy->setPageNumber(115);
    print "The book is opened on the page 115" . PHP_EOL;
} catch (OutOfRangeException $e) {
    print $e->getMessage() . PHP_EOL;
}

$proxy->close();
