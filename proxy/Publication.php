<?php

namespace Proxy;

interface Publication extends \Singleton\Publication
{
    public function getDailyRate(int $days);
    public function getCategory();
    public function getPageCount();
}
