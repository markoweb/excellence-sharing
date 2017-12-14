<?php
namespace FactoryMethod;

use Singleton\Book;

class Controller
{
    public function action()
    {
        $bookPublisher = new BookPublisher('cat1');

        $bookPublisher->sellPublication(100);
        $bookPublisher->sellPublication(200);
        $bookPublisher->sellPublication(300);
    }
}
