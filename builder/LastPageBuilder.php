<?php
namespace Builder;

class LastPageBuilder extends AbstractPageBuilder
{
    public function buildHeader()
    {
        $this->page->setHeader('Header of the Last Page');
    }

    public function buildBody()
    {
        $this->page->setBody('Body of the Last Page');
    }

    public function buildFooter()
    {
        $this->page->setFooter('Footer of the Last Page');
    }
}
