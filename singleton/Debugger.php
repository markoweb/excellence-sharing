<?php
namespace Singleton;

class Debugger
{
    private static $instance = null;

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function debug(String $message)
    {
        print $message;
    }

    private function __construct()
    {
    }
}
