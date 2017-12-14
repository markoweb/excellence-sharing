<?php
namespace Builder;

interface PageBuilder
{
    public function getPage();
    public function createNewPage();
    public function buildHeader();
    public function buildBody();
    public function buildFooter();
}
