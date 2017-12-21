<?php

namespace Proxy;

use Singleton\Publication;

abstract class PublicationProxy implements Publication
{
    protected $publication;

    public function __construct(Publication $publication)
    {
        $this->publication = $publication;
    }

    public function open()
    {
        return $this->publication->open();
    }

    public function close()
    {
        return $this->publication->close();
    }

    public function setPageNumber(int $page)
    {
        return $this->publication->setPageNumber($page);
    }

    public function getPageNumber()
    {
        return $this->publication->getPageNumber();
    }

    public function getDailyRate(int $days = 1)
    {
        return $this->publication->getDailyRate($days);
    }

    public function getCategory()
    {
        return $this->publication->getCategory();
    }

    public function getPageCount()
    {
        return $this->publication->getPageCount();
    }
}
