<?php

namespace Proxy;

use Singleton\Publication;

class PrepaidPublicationProxy extends PublicationProxy
{
    protected $startPage;
    protected $endPage;

    public function __construct(Publication $publication, int $startPage, int $endPage)
    {
        parent::__construct($publication);
        $this->startPage = $startPage;
        $this->endPage = $endPage;
    }

    public function setPageNumber(int $page)
    {
        if ($this->startPage > $page ||
            $this->endPage < $page) {
            throw new OutOfRangeException($page, $this->startPage, $this->endPage);
        }
        return parent::setPageNumber($page);
    }
}
