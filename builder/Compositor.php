<?php
namespace Builder;

class Compositor
{
    /** @var PageBuilder */
    protected $pageBuilder;

    public function setPageBuilder(PageBuilder $pageBuilder)
    {
        $this->pageBuilder = $pageBuilder;
    }

    public function getPage() {
        return $this->pageBuilder->getPage();
    }

    public function compositePage()
    {
        $this->pageBuilder->createNewPage();
        $this->pageBuilder->buildHeader();
        $this->pageBuilder->buildBody();
        $this->pageBuilder->buildFooter();
    }
}
