<?php

namespace Singleton;

interface Publication
{
    public function open();
    public function close();
    public function setPageNumber(int $page);
    public function getPageNumber();
}
