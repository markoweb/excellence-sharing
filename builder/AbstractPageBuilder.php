<?php
namespace Builder;

abstract class AbstractPageBuilder implements PageBuilder
{
    /** @var Page */
    protected $page;

    public function getPage()
    {
        return $this->page;
    }

    public function createNewPage()
    {
        $this->page = new Page();
    }
}
