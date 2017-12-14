<?php
namespace FactoryMethod;

use Singleton\Publication;

abstract class AbstractPublisher
{
    /** @var string */
    protected $category;

    /**
     * @param string $category
     */
    public function __construct($category)
    {
        $this->category = $category;
    }

    /**
     * Create Publication
     *
     * @param int $pageCount
     * @return Publication
     */
    abstract protected function createPublication(int $pageCount);

    public function sellPublication($pageCount)
    {
        $publication = $this->createPublication($pageCount);
        $publication->open();

        $page = mt_rand(1, $pageCount);
        $publication->setPageNumber($page);

        $publication->close();

        return $publication;
    }
}
