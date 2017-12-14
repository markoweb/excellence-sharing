<?php

namespace FactoryMethod;

use Singleton\Book;

class BookPublisher extends AbstractPublisher
{
    /**
     * @inheritdoc
     */
    protected function createPublication(int $pageCount)
    {
        $publication = new Book($this->category, $pageCount);

        return $publication;
    }
}
