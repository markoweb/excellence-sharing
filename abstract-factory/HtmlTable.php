<?php

namespace abstractFactory;

class HtmlTable implements Table
{
    public function show($content)
    {
        print "<table>{$content}</table>";
    }
}
