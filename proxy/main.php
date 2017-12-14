<?php

$book = new \Singleton\Book('medicine', 650);
$proxy = new \Proxy\PrepaidPublicationProxy($book, 261, 414);

$proxy->open();
try {
    $proxy->setPageNumber(300);
    print "The book is opened on the page 300" . PHP_EOL;

    $proxy->setPageNumber(115);
    print "The book is opened on the page 115" . PHP_EOL;
} catch (\Proxy\OutOfRangeException $e) {
    print $e->getMessage() . PHP_EOL;
}

$proxy->close();
