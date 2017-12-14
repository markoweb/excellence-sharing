<?php

namespace Proxy;

class Book extends \Singleton\Book implements Publication
{
    public function getDailyRate(int $days)
    {
        throw new \Exception('Not implemented yet');
    }

    public function getCategory()
    {
        throw new \Exception('Not implemented yet');
    }

    public function getPageCount()
    {
        throw new \Exception('Not implemented yet');
    }
}
