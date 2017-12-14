<?php
namespace Builder;

class FirstPageBuilder extends AbstractPageBuilder
{
    public function buildHeader()
    {
        $this->page->setHeader('Header of the First Page');
    }

    public function buildBody()
    {
        $this->page->setBody('Body of the First Page');
    }

    public function buildFooter()
    {
        $this->page->setFooter('Footer of the First Page');
    }
}
