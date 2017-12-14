<?php
namespace Singleton;

class Controller
{
    public function action()
    {
        $debugger1 = Debugger::getInstance();
        new Book($debugger1, 'pc', 100);
    }

    public function action2()
    {
        $debugger2 = Debugger::getInstance();
        new Book($debugger2, 'pc2', 200);
    }
}
