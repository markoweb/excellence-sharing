<?php

namespace Singleton;

interface Publication
{
    public function open();

    public function close();

    public function setPageNumber(int $page);

    public function getPageNumber();

    public function getDailyRate(int $days = 1);

    public function getCategory();

    public function getPageCount();
}
