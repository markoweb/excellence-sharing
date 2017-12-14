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

    public function close()
    {
        $this->setPageNumber(0);
        $this->closed = true;
    }

    public function setPageNumber($page)
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
}
