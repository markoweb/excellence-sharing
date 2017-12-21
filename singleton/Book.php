<?php
namespace Singleton;

class Book implements Publication
{
    protected $category;
    protected $pageCount;
    protected $pageNumber = 0;
    protected $closed = true;

    public function __construct($category, $pageCount)
    {
        $this->category = $category;
        $this->pageCount = $pageCount;
    }

    public function open()
    {
        $this->closed = false;
    }

    public function setPageNumber(int $page)
    {
        if ($this->closed !== false || $this->pageCount < $page) {
            return false;
        }
        $this->pageNumber = $page;
        return true;
    }

    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    public function close()
    {
        $this->setPageNumber(0);
        $this->closed = true;
    }

    public function __destruct()
    {
        if (! $this->closed) {
            $this->close();
        }
    }

    public function getDailyRate(int $days = 1)
    {
        if ($days >= 14) {
            return 7.50;
        }
        return 10;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getPageCount()
    {
        return $this->pageCount;
    }
}
