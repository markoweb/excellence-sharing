<?php

namespace AbstractFactory;

class HtmlTable implements Table
{
    public function show($content)
    {
        print "<table>{$content}</table>";
    }
}
