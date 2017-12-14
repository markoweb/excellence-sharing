<?php

namespace Proxy;

class OutOfRangeException extends \OutOfRangeException
{
    protected $page;
    protected $startPage;
    protected $endPage;

    public function __construct(int $page, int $startPage, int $endPage)
    {
        $this->page = $page;
        $this->startPage = $startPage;
        $this->endPage = $endPage;

        $this->message = sprintf(
            "The requested page nr. %d is not available in your subscription. Available page range is %d - %d.",
            $this->page, $this->startPage, $this->endPage
        );
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function getStartPage(): int
    {
        return $this->startPage;
    }

    public function getEndPage(): int
    {
        return $this->endPage;
    }
}
