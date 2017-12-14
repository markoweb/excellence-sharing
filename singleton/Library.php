<?php
namespace Singleton;

class Library
{
    protected $library = [];
    protected $rentalActions = [];

    /**
     * @var Debugger
     */
    private $debugger;

    public function __construct(Debugger $debugger)
    {
        $this->debugger = $debugger;
    }

    public function addToLibrary($id, Publication $p)
    {
        $this->library[$id] = $p;
    }

    public function debug(string $message)
    {
        $this->debugger->debug($message);
    }
}

