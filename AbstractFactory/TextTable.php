<?php

namespace AbstractFactory;

class TextTable implements Table
{
    /**
     * @param string $content
     * @return string mixed
     */
    public function show($content)
    {
        for ($i = 0; $i < strlen($content); $i++) {
            print '-';
        }
        print $content;
        for ($i = 0; $i < strlen($content); $i++) {
            print '-';
        }
    }
}
